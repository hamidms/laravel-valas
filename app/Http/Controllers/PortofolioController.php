<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\Valas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PortofolioController extends Controller
{
    public function index() {
        // Data

        $transactions = TransactionDetail::where('user_id', Auth::user()->id)->with(['user', 'transaction', 'valas'])->get();
        
        $transactions_current = TransactionDetail::where('user_id', Auth::user()->id)->with(['user', 'transaction', 'valas'])->where('type', 'buy')->get();

        $valas = DB::table('laravel_valas.valas')
        ->select('valas.id', 'valas.nama', 'valas.nilai_jual', 'valas.nilai_beli', 'subquery.tanggal_rate')
        ->joinSub(function ($query) {
            $query->from('laravel_valas.valas')
                ->select('nama', DB::raw('MAX(tanggal_rate) AS tanggal_rate'))
                ->groupBy('nama');
        }, 'subquery', function ($join) {
            $join->on('valas.nama', '=', 'subquery.nama')
                ->on('valas.tanggal_rate', '=', 'subquery.tanggal_rate');
        })
        ->orderBy('subquery.tanggal_rate', 'DESC')
        ->get();

        // Perhitungan

        $totalRate = 0;
        foreach ($transactions as $transaction) {
            $totalRate += floatval($transaction->rate);
        }

        $totalRate_current = 0;
        foreach ($transactions_current as $transaction) {
            $totalRate_current += floatval($transaction->rate);
        }

        $profit = 0;
        foreach ($valas as $va) {
            foreach ($transactions as $transaction) {
                if ($va->nama == $transaction->valas->nama) {
                    $profit += $va->nilai_jual*$transaction->qty;
                }
            }
        }

        $profit_current = 0;
        foreach ($valas as $va) {
            foreach ($transactions_current as $transaction) {
                if ($va->nama == $transaction->valas->nama) {
                    $profit_current += $va->nilai_jual*$transaction->qty;
                }
            }
        }

        $profit = $profit-$totalRate;
        $profit_current = $profit_current-$totalRate_current;

        // return $transactions;
        return view('portofolio.index', compact('totalRate', 'profit','totalRate_current', 'profit_current', 'transactions'));
    }
}
