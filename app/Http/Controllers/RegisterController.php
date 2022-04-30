<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => 'Register',
            "active" => 'login'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:authors',
            'email' => 'required|email:dns|unique:authors',
            'password' => 'required|min:8|max:255'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        Author::create($validateData);

        // $request->session()->flash('success','Registration successfull! Please login');
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
