<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])) {
            $token = $request->user()->createToken($request->email);
            return $token;
        }else{
            return "Usario y password incorrecto";
        }

    }

    public function logout(Request $request)
    {
        auth('sanctum')->user()->tokens()->delete();
    }
}
