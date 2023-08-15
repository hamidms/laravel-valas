<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function index() {

        $memberships = Membership::get();
        return view('membership.index', compact('memberships'));
    }

    public function create() {
        return view('membership.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'discount' => 'required',
            'minimum_profit' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $membership = new Membership();
        $membership->nama = $request->input('nama');
        $membership->discount = $request->input('discount');
        $membership->minimum_profit = $request->input('minimum_profit');
        $membership->save();

        return redirect()->route('membership')->with('success', 'Data membership berhasil disimpan.');
    }

    public function edit($membership_id) {
        $membership = Membership::find($membership_id);

        return view('membership.edit', compact('membership'));
    }

    public function update(Request $request, $membership_id) {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'discount' => 'required',
            'minimum_profit' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // return $request;

        $membership = Membership::find($membership_id);

        if (!$membership) {
            return redirect()->back()->with('error', 'Membership not found');
        }

        $membership->nama = $request->input('nama');
        $membership->discount = $request->input('discount');
        $membership->minimum_profit = $request->input('minimum_profit');
        $membership->save();

        return redirect()->route('membership')->with('success', 'Data membership berhasil diupdate.');
    }

    public function delete($membership_id) {
        $membership = Membership::find($membership_id);

        if (!$membership) {
            return redirect()->back()->with('error', 'Membership not found');
        }

        $membership->delete();

        return redirect()->route('membership')->with('success', 'Membership deleted successfully');
    }
}
