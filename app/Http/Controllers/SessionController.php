<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function signin(Request $request)
    {
        $credentials = $this->credentials($request);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/produk');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }
    public function signout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
    protected function credentials(Request $request)
    {
        if (is_numeric($request->get('email'))) {
            return ['phone' => $request->get('email'), 'password' => $request->get('password')];
        } else if (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return ['email' => $request->get('email'), 'password' => $request->get('password')];
        }
        return ['username' => $request->get('email'), 'password' => $request->get('password')];
    }
}
