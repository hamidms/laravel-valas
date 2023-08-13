<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home'; // Ubah dengan rute yang sesuai

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
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
