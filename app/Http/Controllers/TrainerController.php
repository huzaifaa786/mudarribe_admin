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
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer');
        $userDocuments = $usersCollection->documents();

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $this->users[] = $data;
        }
        return view('trainer.index',['users'=>$this->users]);
    }

    public function approve($id)
    {
        app('firebase.firestore')->database()->collection('users')->document($id)->update([['path' => 'status', 'value' => 2]]);
        return redirect()->route('trainer.index');
    }

    public function delete($id)
    {
        $this->auth->deleteUser($id);
        app('firebase.firestore')->database()->collection('users')->document($id)->delete();
        return redirect()->route('trainer.index');
    }
}
