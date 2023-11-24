<?php

namespace App\Livewire\Admin;
use Livewire\Component;
use Kreait\Laravel\Firebase\Facades\Firebase;

class AdminIndex extends Component
{
    protected $auth;

    public $users;

    public function deleteUser($id)
    {
        $this->auth = Firebase::auth();
        $this->auth->deleteUser($id);
        app('firebase.firestore')->database()->collection('users')->document($id)->delete();
    }

    public function approveUser($id)
    {
        app('firebase.firestore')->database()->collection('users')->document($id)->update([['path' => 'status', 'value' => 2]]);
    }

    public function mount()
    {
        $this->fetchUsers();
    }

    public function fetchUsers()
    {
        $this->users = [];
        $firestore = app('firebase.firestore');
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer');
        $userDocuments = $usersCollection->documents();


        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $this->users[] = $data;
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-index');
    }
}
