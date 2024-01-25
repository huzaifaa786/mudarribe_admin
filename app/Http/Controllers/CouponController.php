<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CouponController extends Controller
{
    public $coupons;
    public function store(Request $request)
    {
        $request->validate([
            'couponCode' => 'required',
            'discountPercentage' => 'required |numeric'
        ]);

        $id = str::uuid() . '-' . now()->millisecond;
        $data = [
            'id' => $id,
            'CouponCode' => $request->couponCode,
            'DiscountPercentage' => $request->discountPercentage
        ];
        app('firebase.firestore')->database()->collection('coupon_code')->document($id)->set($data);
        toastr()->success('Coupon created successfully');
        return redirect()->back();
    }
    public function index(Request $request)
    {
        $this->coupons = [];
        $firestore = app('firebase.firestore');
        $CouponCollection = $firestore->database()->collection('coupon_code');
        $CouponDocuments = $CouponCollection->documents();

        foreach ($CouponDocuments as $CouponDocument) {
            $data = $CouponDocument->data();
            $this->coupons[] = $data;
        }
        return view('CouponCode.index', ['coupons' => $this->coupons, 'tab' => 'CouponCode']);
    }

    public function update(Request $request)
    {
        $updatedCouponCode = $request->couponCode;
        $updatedDiscount = $request->discountPercentage;

        app('firebase.firestore')->database()->collection('coupon_code')->document($request->id)->update([['path' => 'CouponCode', 'value' => $updatedCouponCode], ['path' => 'DiscountPercentage', 'value' => $updatedDiscount]]);
        toastr()->success('Coupon updated successfully!', 'Congrats');
        return redirect()->back();
    }

    public function delete($id)
    {
        app('firebase.firestore')->database()->collection('coupon_code')->document($id)->delete();
        toastr()->success('Coupon Deleted successfully!');
        return redirect()->back();
    }

    public function create(){
        return view('CouponCode.create',['tab'=>'CouponCode']);
    }
}
