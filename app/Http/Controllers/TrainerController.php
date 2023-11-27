<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Livewire\Attributes\Layout;

class TrainerController extends Controller
{
    public $auth;
    public $users;
    public function __construct()
    {
       $this->auth = Firebase::auth();
    }
    public function index()
    {
        $this->users = [];
        $firestore = app('firebase.firestore');
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer')->where('status','=',2);
        $userDocuments = $usersCollection->documents();

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $this->users[] = $data;
        }
        return view('trainer.approved',['users'=>$this->users,'n'=>2]);
    }

    public function pendingTrainers()
    {
        $this->users = [];
        $firestore = app('firebase.firestore');
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer')->where('status','=',1);
        $userDocuments = $usersCollection->documents();

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $this->users[] = $data;
        }
        return view('trainer.pending',['users'=>$this->users]);
    }

    public function rejectedTrainers()
    {
        $this->users = [];
        $firestore = app('firebase.firestore');
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer')->where('status','=',0);
        $userDocuments = $usersCollection->documents();

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $this->users[] = $data;
        }
        return view('trainer.rejected',['users'=>$this->users]);
    }

    public function approve($id)
    {
        app('firebase.firestore')->database()->collection('users')->document($id)->update([['path' => 'status', 'value' => 2]]);
        return redirect()->route('trainer.pending');
    }

    public function delete($id)
    {
        $this->auth->deleteUser($id);
        app('firebase.firestore')->database()->collection('users')->document($id)->delete();
        return redirect()->route('trainer.index');
    }
}
