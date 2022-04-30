<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            "title" => 'Login',
            "active" => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5|max:255',
            'password' => 'required|min:8|max:255'
        ]);

        dd('berhasil login!');
    }
}
