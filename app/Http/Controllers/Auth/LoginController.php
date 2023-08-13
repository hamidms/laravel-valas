<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/'; // Ubah dengan rute yang sesuai

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Lakukan validasi form login sesuai kebutuhan
        $credentials = $request->only('username', 'password');

        // return $request;
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if (in_array($user->membership_id, [1, 2])) {
                return redirect()->route('admin.dashboard'); // Ganti dengan rute sesuai kebutuhan
            }

            return redirect()->route('user.dashboard'); // Ganti dengan rute sesuai kebutuhan
        }

        return redirect()->route('login')->with('error', 'Username or password is incorrect');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Tambahkan method authenticated seperti yang telah dijelaskan sebelumnya
    protected function authenticated($request, $user)
    {
        if (in_array($user->membership_id, [1, 2])) {
            return redirect()->route('admin.dashboard'); // Ganti dengan rute sesuai kebutuhan
        }

        return redirect()->route('user.dashboard'); // Ganti dengan rute sesuai kebutuhan
    }
}
