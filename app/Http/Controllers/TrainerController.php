<?php

namespace App\Http\Controllers;
use Kreait\Laravel\Firebase\Facades\Firebase;

class TrainerController extends Controller
{
    public $auth;
    public $users;
    public $posts;
    public function __construct()
    {
       $this->auth = Firebase::auth();
    }
    public function aprrovedTrainers()
    {
        $this->users = [];
        $firestore = app('firebase.firestore');
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer')->where('status','=',2);
        $userDocuments = $usersCollection->documents();

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $this->users[] = $data;
        }
        return view('trainer.approved',['users'=>$this->users,'tab'=>'trainer']);
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
        return view('trainer.pending',['users'=>$this->users,'tab'=>'trainer']);
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
        return view('trainer.rejected',['users'=>$this->users,'tab'=>'trainer']);
    }

    public function trainerPosts($id)
    {
        $this->posts = [];
        $firestore = app('firebase.firestore');
        $trainerPost = $firestore->database()->collection('trainer_posts')->where('trainerId', '=', $id);
        $trainserPosts = $trainerPost->documents();

        foreach ($trainserPosts as $post) {
            $data = $post->data();
            $this->posts[] = $data;
        }
       return view('trainer.posts',['posts'=>$this->posts,'tab'=>'trainer']);
    }

    public function approve($id)
    {
        app('firebase.firestore')->database()->collection('users')->document($id)->update([['path' => 'status', 'value' => 2]]);
        toastr()->success('Trainer approved successfully!', 'Congrats');
        return redirect()->back();
    }

    public function delete($id)
    {
        $this->auth->deleteUser($id);
        app('firebase.firestore')->database()->collection('users')->document($id)->delete();
        toastr()->success('Trainer Deleted successfully!');
        return redirect()->back();
    }
}
