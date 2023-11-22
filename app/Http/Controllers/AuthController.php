<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class AuthController extends Controller
{
    protected $auth;
    public function __construct()
    {
    $this->auth = Firebase::auth();
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required | min:6'
        ]);
        $email = $request->email;
        $password= $request->password;
        $response = $this->auth->signInWithEmailAndPassword($email,$password);
        if($response != 'INVALID_LOGIN_CREDENTIALS')
        {
            return redirect()->route('admin.index');
        }
    }
}
