@extends('layouts.app')
@section('main','Coupon')
@section('sub','')

@section('content')



 
<div class="container mx-auto my-10">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h1 class="text-2xl font-semibold mb-6 text-center">Apply Coupon</h1>

                <form method="post" action="{{route('coupon.index')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="couponCreate" class="block text-sm font-medium text-gray-600">Coupon Create:</label>
                        <input type="text" name="couponCreate"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" />
                    </div>

                    <div class="mb-4">
                        <label for="discountPercentage" class="block text-sm font-medium text-gray-600">Discount Percentage%:</label>
                        <input type="number" name="discountPercentage"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"/>
                    </div>


                    <div class="flex justify-center mt-6">
                        <button type="submit" class="inline-block w-1/4 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

@endsection