<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class ReportController extends Controller
{
    public $auth;

    public function __construct()
    {
        $this->auth = Firebase::auth();
    }
    public function index()
    {
        $reports = [];
        $firestore = app('firebase.firestore');
        $reportsCollection = $firestore->database()->collection('trainer_reports');
        $reportDocuments = $reportsCollection->documents();
        // fetch users
        $users = [];
        $usersCollection = $firestore->database()->collection('users')->documents();
        foreach ($usersCollection as $userDoc) {
            $users[$userDoc->id()] = $userDoc->data();
        }

        foreach ($reportDocuments as $reportDocument) {
            $data = $reportDocument->data();
            $user = $users[$data['traineeId']] ?? [];
            $data['user'] = $user;
            $reports[] = $data;
        }

        return view('report.index', ['reports' => $reports, 'tab' => 'reports']);
    }
}
