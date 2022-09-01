<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($credentials)) {
            return response(['message' => 'Invalid Login!']);
        }

        $user = User::find(1);

        // Creating a token without scopes...
        $token = $user->createToken('testToken')->accessToken;

        return response([
            'user' => Auth::user(),
            'access_token' => $token
        ]);
    }
}
