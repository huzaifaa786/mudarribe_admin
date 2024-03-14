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
        return view('trainer.events', ['events' => $this->events, 'tab' => 'trainer']);
    }

    public function events($id)
    {
        $events = [];
        $firestore = app('firebase.firestore');
        
        // Fetch all event attendees
        $eventAttendees = $firestore->database()->collection('event_attendees')->where('userId','=',$id)->documents();
    
        // Fetch all users
        $users = [];
        $usersCollection = $firestore->database()->collection('users')->documents();
        foreach ($usersCollection as $userDoc) {
            $users[$userDoc->id()] = $userDoc->data();
        }
    
        // Fetch all events
        $eventsData = [];
        $eventsCollection = $firestore->database()->collection('trainer_events')->documents();
        foreach ($eventsCollection as $eventDoc) {
            $eventsData[$eventDoc->id()] = $eventDoc->data();
        }
    
        foreach ($eventAttendees as $event) {
            $data = $event->data();
    
            // Fetch user
            $userId = $data['userId'];
            $user = $users[$userId] ?? [];
    
            // Fetch event
            $eventId = $data['eventId'];
            $event = $eventsData[$eventId] ?? [];
    
            // Fetch trainer
            $trainerId = $data['trainerId'];
            $trainer = $users[$trainerId] ?? [];
    
            $events[] = [
                'user' => $user,
                'event' => $event,
                'trainer' => $trainer,
                'amount' => $data['amount']
            ];
        }
        // dd($events);

       
   
        return view('event.index', ['events' => $events, 'tab' => 'trainee']);
    }
}
