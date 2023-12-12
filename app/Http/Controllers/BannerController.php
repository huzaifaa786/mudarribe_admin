<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('banner.index', ['tab' => 'banner']);
    }

    public function setDummyData()
    {
        $data = [
            'id' => 'LA',
            'amount' => '500',
        ];
        app('firebase.firestore')->database()->collection('banner_charges')->document('LA')->set($data);
    }
}
