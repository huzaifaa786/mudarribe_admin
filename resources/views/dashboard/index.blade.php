@extends('layouts.app')
@section('main', 'Dashboard')
@section('sub', '')

@section('content')
<div class="grid grid-cols-3 gap-4">
    <div class="bg-white rounded-xl shadow-lg">
        <div class="flex flex-row">
            <div class="basis-9/12 p-4">
                <p class="text-base font-semibold">Total Trainers</p>
                <h5 class="text-lg font-bold text-black">{{$trainer}}</h5>
            </div>
            <div class="basis-3/12 p-4">
               <div class="bg-gradient-to-tl from-purple-700 to-pink-500 text-white rounded-xl w-12 h-12 text-center py-3">
                <i class="fa fa-users" aria-hidden="true"></i>
               </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg">
        <div class="flex flex-row">
            <div class="basis-9/12 p-4">
                <p class="text-base font-semibold">Total Trainee</p>
                <h5 class="text-lg font-bold text-black">{{$trainee}}</h5>
            </div>
            <div class="basis-3/12 p-4">
               <div class="bg-gradient-to-tl from-purple-700 to-pink-500 text-white rounded-xl w-12 h-12 text-center py-3">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
               </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg">
        <div class="flex flex-row">
            <div class="basis-9/12 p-4">
                <p class="text-base font-semibold">Total Users</p>
                <h5 class="text-lg font-bold text-black">{{$total}}</h5>
            </div>
            <div class="basis-3/12 p-4">
               <div class="bg-gradient-to-tl from-purple-700 to-pink-500 text-white rounded-xl w-12 h-12 text-center py-3">
                <i class="fa fa-users" aria-hidden="true"></i>
               </div>
            </div>
        </div>
    </div>

</div>
@endsection
