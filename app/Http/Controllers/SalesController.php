<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public $fetchedOrders;
    public $month;
    public $year;
    public $selectedYear;
    public $date;
    public $selectedMonth;

    public function index()
    {
        return view('sales.index', ['tab' => 'Sales']);
    }

    public function filter(Request $request)
    {
        $this->selectedYear = $request->year;
        $this->fetchOrders();

        if ($request->type == 'Yearly') {
            $sales =   $this->getMonthlySales();
            $formattedLabels = $this->getMonthLabels();
        } else {
            $sales =  $this->getDailySales($request->month);
            $formattedLabels = $this->getDayLabels();
        }

        return response()->json([
            'dates' => $formattedLabels,
            'count' => $sales,
        ]);
    }
    public function fetchOrders()
    {
        $this->fetchedOrders = [];

        $firestore = app('firebase.firestore');
        $ordersCollection = $firestore->database()->collection('orders');
        $orders = $ordersCollection->documents();

        foreach ($orders as $order) {
            $data = $order->data();
            $this->fetchedOrders[] = $data;
        }
    }

    public function getMonthlySales()
    {
        $sales = [];
        for ($i = 0; $i < 12; $i++) {
            $total = 0;
            foreach ($this->fetchedOrders as $order) {
                $this->getdate($order['orderId']);
                if ($i + 1 ==  $this->month && $this->year == $this->selectedYear) {
                    $total += $order['amount'];
                }
            }
            $sales[$i] = $total;
        }
        return $sales;
    }

    public function getDailySales($month)
    {
        $sales = [];
        $days = $this->getDaysOfMonth();
        for ($i = 1; $i <= $days; $i++) {
            $total = 0;
            foreach ($this->fetchedOrders as $order) {
                $this->getdate($order['orderId']);
                $dateToCompare = Carbon::parse($this->selectedYear . '-' . $month . '-' . str_pad($i, 2, '0', STR_PAD_LEFT));
                if ($dateToCompare->isSameDay($this->date)) {
                    $total += $order['amount'];
                }
            }
            $sales[] = $total;
        }
        return $sales;
    }

    public function getdate($date)
    {
        $timestampInMilliseconds = substr($date, 0, 13);
        $timestampInSeconds = $timestampInMilliseconds / 1000;
        $fetchedDate = Carbon::createFromTimestamp($timestampInSeconds);

        $this->month = $fetchedDate->format('m');
        $this->year = $fetchedDate->format('Y');
        $this->date = $fetchedDate->format('Y-m-d');
    }

    public function getDaysOfMonth()
    {
        return  Carbon::parse($this->selectedYear)->month($this->selectedMonth)->daysInMonth;
    }

    public function getMonthLabels()
    {
        $labels =  ["Jan", "Feb", "Mar", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec",];
        return $labels;
    }

    public function getDayLabels()
    {
        $days = $this->getDaysOfMonth();
        $labels = [];
        for ($i = 1; $i <= $days; $i++) {
            $labels[] = $i;
        }
        return $labels;
    }
}
