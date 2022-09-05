<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $register = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('TestPassportApi')->accessToken;

        return response()->json([
            'token' => $token,
            200
        ]);
    }

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
