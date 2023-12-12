<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'id' => $request->input('couponCreate'),
            'amount' => $request->input('discountPercentage'),
        ];



        app('firebase.firestore')->database()->collection('coupon_code')->document('id')->set($data);

        return view('CouponCode.index', ['tab' => 'CouponCode']);
    }



    public function setDummyCoupon()
    {
        return view('CouponCode.show', ['tab' => 'CouponCode']);
    }

    public function hello(Request $request)
    {
        $data = [
            'id' => $request->input('couponCreate'),
            'amount' => $request->input('discountPercentage'),
        ];
        app('firebase.firestore')->database()->collection('coupon_code')->document($data['id'])->set($data);
        return view('CouponCode.index', ['tab' => 'CouponCode']);
    }
}
