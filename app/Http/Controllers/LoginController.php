<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:authors',
            'email' => 'required|email:dns|unique:authors',
            'password' => 'required|min:8|max:255'
        ]);
    }
}
