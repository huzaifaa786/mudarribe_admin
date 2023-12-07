<?php

namespace App\Http\Controllers;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Http\Request;

class TrainerEventController extends Controller
{
    public $auth;
    public $events;
    public function __construct()
    {
       $this->auth = Firebase::auth();
    }
    public function index()
    {
        $this->events = [];
        $firestore = app('firebase.firestore');
        $eventCollection = $firestore->database()->collection('trainer_events')->documents();
        foreach ($eventCollection as $event) {
            $data = $event->data();
            $this->events[] = $data;
        }
        return view('trainer.events',['events'=>$this->events,'tab'=>'trainer']);
    }
}
