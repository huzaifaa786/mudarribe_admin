<?php
namespace App\Services;

use Carbon\Carbon;

class TrainerSalesService{

    public $trainer;
    public function fetchOrders($id)
    {
        $fetchedOrders = [];

        $firestore = app('firebase.firestore');
        $ordersCollection = $firestore->database()->collection('orders')->where('trainerId', '=', $id);
        $orders = $ordersCollection->documents();

        foreach ($orders as $order) {
            $data = $order->data();
            $fetchedOrders[] = $data;
        }
        return $fetchedOrders;
    }

    public function fetchEvents($id)
    {
        $fetchedEvents = [];

        $firestore = app('firebase.firestore');
        $eventsCollection = $firestore->database()->collection('event_attendees')->where('trainerId', '=', $id);
        $events = $eventsCollection->documents();

        foreach ($events as $event) {
            $data = $event->data();
            $fetchedEvents[] = $data;
        }
        return $fetchedEvents;
    }

    public function filterOrders($orders, $startDate, $endDate, $name)
    {
        $filteredorders = [];
        foreach ($orders as $order) {

            $date = $this->getdate($order['orderId']);

            if ($date->gte($startDate) && $date->lte($endDate)) {
                $date = $date->format('Y-m-d');

                $filteredorders[] = [
                    'name' => $name,
                    'date' => $date,
                    'amount' => $order['amount'],
                    'type' => $order['type'],
                ];
            }
        }
        return $filteredorders;
    }

    public function filterEvents($events, $startDate, $endDate, $name)
    {
        $filteredEvents = [];
        foreach ($events as $event) {
            $date = $this->getdate($event['eventId']);
            if ($date->gte($startDate) && $date->lte($endDate)) {
                $date = $date->format('Y-m-d');
                $filteredEvents[] = [
                    'name' => $name,
                    'date' => $date,
                    'amount' => $event['amount'],
                    'type' => 'Event',
                ];
            }
        }
        return $filteredEvents;
    }

    public function getdate($date)
    {
        $timestampInMilliseconds = substr($date, 0, 13);
        $timestampInSeconds = $timestampInMilliseconds / 1000;
        $fetchedDate = Carbon::createFromTimestamp($timestampInSeconds);
        return $fetchedDate;
    }

    public function getTrainerName($id){
            $firestore = app('firebase.firestore');
            $usersCollection = $firestore->database()->collection('users')->where('id', '=', $id);
            $userDocuments = $usersCollection->documents();

            foreach ($userDocuments as $userDocument) {
                $data = $userDocument->data();
                $this->trainer = $data;
            }
            return $this->trainer['name'];
    }
}
