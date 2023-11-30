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
                    Posts
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
                    <x-badge rounded label="Approved"  class="bg-green-500 text-white" />
                </td>
                <td class=" py-4">
                    <a href="{{route('trainer.posts',['id'=>$user['id']])}}" class="bg-gradient-to-tl from-purple-700 to-pink-500 text-white px-3 rounded-xl">Show</i></a>
                </td>
                <td class="px-6 py-4">
                    <div class="rounded-full border w-8 h-8 content-center text-center py-1 ">
                        <a href="{{route('trainer.delete',['id'=>$user['id']])}}"><i class="fa fa-trash" style="color: red"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Yes, I'm sure
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection


