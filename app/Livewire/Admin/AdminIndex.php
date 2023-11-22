<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Url;
use Kreait\Laravel\Firebase\Facades\Firebase;
use App\Services\FirebaseService;
use Kreait\Firebase\Auth\UserQuery;
use Kreait\Firebase\Contract\Firestore;
use Livewire\Component;

class AdminIndex extends Component
{
    private $database;
    protected $auth;

    public function render()
    {
        $firestore = FirebaseService::connect();
        // $this->auth = Firebase::auth();
        // $userQuery = UserQuery::all()
        // ->inDescendingOrder()
        //     ->withOffset(1)
        //     ->withLimit(499);

        // $users = $this->auth->queryUsers($userQuery);
        // $database = $firestore->database(); //FireStoreClient Object
        // $user = $database->collection('users');
        // dd($user);
        //dd($users);
        return view('livewire.admin.admin-index',['users'=>$users]);
    }
}
