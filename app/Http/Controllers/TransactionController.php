<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    
    public function buy() {
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
    
        return view('valas.buy', compact('valas'));
    }

    public function checkout(Request $request) {

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
        ->where('valas.id', '=', $request->valas_id) // Menambahkan kondisi WHERE
        ->orderBy('subquery.tanggal_rate', 'DESC')
        ->first();

        $qty = $request->qty;
        $user = User::with('membership')->find($request->user_id);

        // return $user;
        return view('transaction.checkout', compact(['valas', 'qty', 'user']));
    }

    public function payment(Request $request) {
        $transaction = new Transaction();
        $transaction->no_transaksi = $request->input('no_transaksi');
        $transaction->nama_customer = $request->input('nama_customer');
        $transaction->tgl_transaksi = $request->input('tgl_transaksi');
        $transaction->discount = $request->input('discount');
        $transaction->save();

        $transaction_detail = new TransactionDetail();
        $transaction_detail->transaksi_id = $transaction->id;
        $transaction_detail->valas_id = $request->valas_id;
        $transaction_detail->user_id = $request->user_id;
        $transaction_detail->rate = $request->rate;
        $transaction_detail->qty = $request->qty;
        $transaction_detail->save();

        return redirect()->route('valas.dashboard')->with('success', 'Transaksi berhasil.');
    }

    public function sell() {
        $transactions = TransactionDetail::where('user_id', Auth::user()->id)->with(['user', 'transaction', 'valas'])->where('type', 'buy')->get();
        
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

        return view('valas.sell', compact('transactions'));
    }
}
