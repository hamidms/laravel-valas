<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Valas;

class ValasController extends Controller
{
    public function index() {
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
    
        return view('valas.index', compact('valas'));
    }

    public function detail($valas_name) {
        $valas = Valas::where('nama', $valas_name)->get();
        $valas_nilai_jual = Valas::where('nama', $valas_name)->pluck('nilai_jual');
        $valas_tanggal_rate = Valas::where('nama', $valas_name)->pluck('tanggal_rate');

        // return $valas;
        return view('valas.detail', compact(['valas', 'valas_nilai_jual', 'valas_tanggal_rate']));
    }

    public function create() {
        return view('valas.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'nilai_jual' => 'required',
            'nilai_beli' => 'required',
            'tanggal_rate' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $valas = new Valas();
        $valas->nama = $request->input('nama');
        $valas->nilai_jual = $request->input('nilai_jual');
        $valas->nilai_beli = $request->input('nilai_beli');
        $valas->tanggal_rate = $request->input('tanggal_rate');
        $valas->save();

        return redirect()->route('valas')->with('success', 'Data valas berhasil disimpan.');
    }
    
    public function edit($valas_id) {
        $valas = Valas::find($valas_id);

        return view('valas.edit', compact('valas'));
    }

    public function update(Request $request, $valas_id) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'nilai_jual' => 'required',
            'nilai_beli' => 'required',
            'tanggal_rate' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // return $request;

        $valas = Valas::find($valas_id);

        if (!$valas) {
            return redirect()->back()->with('error', 'valas not found');
        }

        $valas->nama = $request->input('nama');
        $valas->nilai_jual = $request->input('nilai_jual');
        $valas->nilai_beli = $request->input('nilai_beli');
        $valas->tanggal_rate = $request->input('tanggal_rate');
        $valas->save();

        return redirect()->route('valas')->with('success', 'Data valas berhasil diupdate.');
    }

    public function delete($valas_id) {
        $valas = Valas::find($valas_id);

        if (!$valas) {
            return redirect()->back()->with('error', 'Valas not found');
        }

        $valas->delete();

        return redirect()->route('valas')->with('success', 'Valas deleted successfully');
    }

    public function dashboard() {
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
    
        return view('valas.dashboard', compact('valas'));
    }

}
