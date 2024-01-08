<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authcontroller extends Controller
{
    public function login()
    {
        return view('dashboard.user.loginuser');
    }
    public function authlogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('pelanggan')->attempt($credentials)) {
            return redirect()->intended('/index');
        }
        return back()->withErrors([
            'error' => 'Username atau Password tidak valid.',
        ]);
    }
    public function logout()
    {
        Auth::guard('pelanggan')->logout();
        return redirect('/loginuser');
    }
}
