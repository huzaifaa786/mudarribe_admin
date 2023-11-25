@extends('layouts.app')

@section('main','Trainer')
@section('sub','Approved')

@section('content')
<div class="relative overflow-x-auto shadow-lg sm:rounded-xl  bg-white p-5 w-full">
    <table id="data_table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" style="width:100%">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 mt-4">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    User Type
                </th>
                <th scope="col" class="px-6 py-3">
                    Gender
                </th>
                 <th scope="col" class="px-6 py-3">
                    Bio
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Categories
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Languages
                 </th>
                <th scope="col" class="px-6 py-3">
                    Status
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <td scope="row" class="flex items-center p py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="">
                        <div class="text-base font-semibold">{{ $user['name'] }}</div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    {{$user['email']}}
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                       {{$user['userType']}}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                       {{$user['gender']}}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                       {{$user['bio']}}
                    </div>
                </td>
                <td class="px-6 py-4">
                    <div class="w-50">
                        @foreach ($user['categories'] as $category)
                            {{$category}} ,
                        @endforeach
                    </div>
                </td>
                <td class="px-6 py-4 ">
                    <div class="w-50">
                        @foreach ($user['languages'] as $language)
                            <span class="">{{$language}} ,</span>
                        @endforeach
                    </div>
                </td>
                <td class="px-3 py-4">
                    @if ($user['status'] == 0)
                    <x-badge  rounded flat red label="Rejected" class="bg-red-100">
                        <x-slot name="append" class="relative flex items-center w-2 h-2">
                            <button type="button">
                                <x-icon name="x" class="w-4 h-4" />
                            </button>
                        </x-slot>
                    </x-badge>
                    @elseif ($user['status'] == 1)
                    <a href="{{route('trainer.approve',['id'=>$user['id']])}}">Approve</a>
                    @else
                    <x-badge rounded label="Approved"  class="bg-green-500 text-white" />

                    @endif
                </td>
                <td class="px-6 py-4">
                    <div class="rounded-full border w-8 h-8 content-center pl-2 pt-1">
                        <a href="{{route('trainer.delete',['id'=>$user['id']])}}"><i class="fa fa-trash" style="color: red"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

