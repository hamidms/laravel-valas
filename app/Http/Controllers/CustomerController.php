<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class CustomerController extends Controller
{
    public function index() {
        $membershipId = [3, 4, 5];

        $users = User::with('membership')->whereIn('membership_id', $membershipId)->get();
        return view('customer.index', compact('users'));
    }

    public function create() {
        return view('customer.create');
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'alamat' => 'required|string|max:255',
            'membership_id' => 'required', 
        ]);
        // return $request;
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->alamat = $request->input('alamat');
        $user->membership_id = $request->input('membership_id');
        $user->save();

        return redirect()->route('customer')->with('success', 'Data user berhasil disimpan.');
    }

    public function edit($user_id) {
        $user = User::find($user_id);

        return view('customer.edit', compact('user'));
    }

    public function update(Request $request, $user_id) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'membership_id' => 'required', 
        ]);
        // return $request;
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($user_id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
    
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->alamat = $request->input('alamat');
        $user->membership_id = $request->input('membership_id');
        
        // Simpan perubahan pada model pengguna
        $user->save();
    
        return redirect()->route('customer')->with('success', 'User updated successfully');
    }
}
