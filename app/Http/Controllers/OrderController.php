<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class OrderController extends Controller
{
    public $auth;

    public function __construct()
    {
        $this->auth = Firebase::auth();
    }
    public function index()
{
    $firestore = app('firebase.firestore');

    // Fetch all necessary collections at once
    $collections = [
        'orders' => $firestore->database()->collection('orders')->documents(),
        'events' => $firestore->database()->collection('event_attendees')->documents(),
        'users' => $firestore->database()->collection('users')->documents(),
        'eventsData' => $firestore->database()->collection('trainer_events')->documents(),
        'plansData' => $firestore->database()->collection('personalplans')->documents(),
        'packagesData' => $firestore->database()->collection('packages')->documents(),
    ];

    // Initialize arrays for storing data
    $orders = [];
    $users = [];
    $eventsData = [];
    $plansData = [];
    $packagesData = [];

    // Fetch and process data
    foreach ($collections['users'] as $userDoc) {
        $users[$userDoc->id()] = $userDoc->data();
    }

    foreach ($collections['eventsData'] as $eventDoc) {
        $eventsData[$eventDoc->id()] = $eventDoc->data();
    }

    foreach ($collections['plansData'] as $plansDoc) {
        $plansData[$plansDoc->id()] = $plansDoc->data();
    }

    foreach ($collections['packagesData'] as $packagesDoc) {
        $packagesData[$packagesDoc->id()] = $packagesDoc->data();
    }

    // Process Orders and Events
    foreach ($collections['orders'] as $orderDocument) {
        $data = $orderDocument->data();
        $user = $users[$data['userId']] ?? [];
        $trainer = $users[$data['trainerId']] ?? [];
        $plan = $data['type'] == "Package" ? ($packagesData[$data['planId']] ?? []) : ($plansData[$data['planId']] ?? []);

        $orders[] = [
            'id' => $data['orderId'],
            'user' => $user,
            'trainer' => $trainer,
            'plan' => $plan,
            'amount' => $data['amount'],
            'type' => 'order',
        ];
    }

    foreach ($collections['events'] as $eventDocument) {
        $data = $eventDocument->data();
        $user = $users[$data['userId']] ?? [];
        $trainer = $users[$data['trainerId']] ?? [];
        $event = $eventsData[$data['eventId']] ?? [];

        $orders[] = [
            'id' => $data['id'],
            'user' => $user,
            'trainer' => $trainer,
            'event' => $event,
            'amount' => $data['amount'],
            'type' => 'event',
        ];
    }

    return view('order.index', ['orders' => $orders, 'tab' => 'orders']);
}

}
