<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $credentials = $request->only('email','password');
        if(Auth::guard('admin')->attempt($credentials,$request->remember_me))
        {
            return redirect()->route('admin.layout');
        }
        return redirect()->route('admin.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
