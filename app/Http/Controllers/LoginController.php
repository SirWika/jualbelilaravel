<?php

namespace App\Http\Controllers;


use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function authlogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('staff')->attempt($credentials)) {
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'error' => 'Username atau Password tidak valid.',
        ]);
    }
    public function logout()
    {
        Auth::guard('staff')->logout();
        return redirect('/login');
    }
}
