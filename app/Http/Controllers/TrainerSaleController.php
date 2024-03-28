<?php

namespace App\Http\Controllers;

use App\Services\TrainerSalesService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainerSaleController extends Controller
{
    public $trainer;
    public function index()
    {
        $trainers = $this->fetchTrainers();
        return view('sales.allSales', ['tab' => 'Sales', 'trainers' => $trainers]);
    }

    public function fetchTrainers()
    {
        $this->trainer = [];
        $firestore = app('firebase.firestore');
        $usersCollection = $firestore->database()->collection('users')->where('userType', '=', 'trainer')->where('status', '=', 2);
        $userDocuments = $usersCollection->documents();

        foreach ($userDocuments as $userDocument) {
            $data = $userDocument->data();
            $this->trainer[] = $data;
        }

        return $this->trainer;
    }

    public function filter(Request $request)
    {
         $salesService = new TrainerSalesService();

        $start_date = Carbon::parse($request->start_date);
        if($request->end_date == null){
            $end_date= Carbon::now();
        }else{
            $end_date = Carbon::parse($request->end_date);
        }

        $trainers = $this->fetchTrainers();
        $trainer_name = $salesService->getTrainerName($request->id);

        $orders = $salesService->fetchOrders($request->id);
        $events = $salesService->fetchEvents($request->id);

        $filteredOrders = $salesService->filterOrders($orders, $start_date, $end_date, $trainer_name);
        $filteredEvents = $salesService->filterEvents($events, $start_date, $end_date, $trainer_name);

        return view('sales.allSales', ['tab' => 'Sales', 'trainers' => $trainers, 'orders' => $filteredOrders, 'events' => $filteredEvents, 'trainer_id' => $request->id, 'start_date' => $request->start_date, 'end_date' => $end_date->format('Y-m-d')]);
    }

}
