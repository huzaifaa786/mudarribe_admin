<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Url;
use Kreait\Laravel\Firebase\Facades\Firebase;
use App\Services\FirebaseService;
use Kreait\Firebase\Auth\UserQuery;
use Livewire\Component;
use Google\Cloud\Firestore\FirestoreClient;


class AdminIndex extends Component
{
    private $database;
    protected $auth;

    public function render()
    {
        // Create Firestore client
        $firestore = app('firebase.firestore');

        // Fetch data from "users" collection
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer');
        $userDocuments = $usersCollection->documents();

        // Process and display data
        $users = [];

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data(); // Get the document data
            $users[] = $data; // Store the data in the $users array
        }
        // dd($users);

        return view('livewire.admin.admin-index', ['users' => $users]);
    }
}
