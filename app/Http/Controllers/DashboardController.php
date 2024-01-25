<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $firestore = app('firebase.firestore');
        $trainer = $firestore->database()->collection('users')->where('userType', '=', 'trainer')->documents()->size();
        $trainee = $firestore->database()->collection('users')->where('userType', '=', 'trainee')->documents()->size();
        $total_user = $trainee + $trainer;

        return view('dashboard.index',['tab'=>'dashboard', 'trainer'=> $trainer, 'trainee'=>$trainee, 'total'=>$total_user]);
    }
}
