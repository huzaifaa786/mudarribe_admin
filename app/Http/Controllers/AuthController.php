<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Auth\SignIn\FailedToSignIn;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required | min:6'
        ]);

        try{
            $response =  app('firebase.auth')->signInWithEmailAndPassword($request->email, $request->password);
        }catch(FailedToSignIn $ex){
            toastr()->error('Invalid email or password');
            return redirect()->back();
        }

        Session::put('uid',$response->firebaseUserId());
        return redirect()->route('dashboard.index');
    }

    public function logout()
    {
        Session::forget('uid');
        return redirect()->route('admin.login');
    }
}
