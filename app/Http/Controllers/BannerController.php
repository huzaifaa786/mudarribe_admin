<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public $banner;
    public function index()
    {
        // $id = str::uuid() . '-' . now()->millisecond;
        // $data = [
        //     'id' => $id,
        //     'amount' => '500',
        // ];
        // app('firebase.firestore')->database()->collection('banner_charges')->document($id)->set($data);
        $firestore = app('firebase.firestore');
        $bannerDocuments = $firestore->database()->collection('banner_charges')->where('id', '=', '0817932b-35cb-457a-a011-ac3c1d222747-711')->documents();
        foreach ($bannerDocuments as $banner) {
            $data = $banner->data();
            $this->banner = $data;
        }
        return view('banner.index', ['banner' => $this->banner, 'tab' => 'banner']);
    }
    public function update(Request $request)
    {
        app('firebase.firestore')->database()->collection('banner_charges')->document($request->id)->update([['path' => 'amount', 'value' => $request->amount]]);
        toastr()->success('Banner charges updated successfully!', 'Congrats');
        return redirect()->back();
    }
    public function createDummyBanner()
    {
        $id = str::uuid() . '-' . now()->millisecond;
        $data = [
            'id' => $id,
            'amount' => '500',
        ];
        app('firebase.firestore')->database()->collection('banner_charges')->document($id)->set($data);
    }
}
