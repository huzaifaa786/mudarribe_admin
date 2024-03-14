<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class TraineeController extends Controller
{
    public $auth;

    public function __construct()
    {
        $this->auth = Firebase::auth();
    }
    public function index()
    {
        $users = [];
        $firestore = app('firebase.firestore');
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainee');
        $userDocuments = $usersCollection->documents();

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $users[] = $data;
        }
        return view('trainee.index', ['users' => $users, 'tab' => 'trainee']);
    }
}
