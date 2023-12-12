@extends('layouts.app')

@section('main', 'Coupon')
@section('sub', 'Show')

@section('content')
    <div class="relative overflow-x-auto shadow-lg sm:rounded-xl  bg-white p-5 w-full">
        <table id="data_table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            style="width:100%">
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
                {{-- @foreach ($users as $user)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td scope="row" class="flex items-center p py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="">
                                <div class="text-base font-semibold">{{ $user['name'] }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $user['email'] }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $user['userType'] }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $user['gender'] }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $user['bio'] }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="w-50">
                                @foreach ($user['categories'] as $category)
                                    {{ $category }} ,
                                @endforeach
                            </div>
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="w-50">
                                @foreach ($user['languages'] as $language)
                                    <span class="">{{ $language }} ,</span>
                                @endforeach
                            </div>
                        </td>
                        <td class="px-3 py-4">
                            <x-badge rounded label="Approved" class="bg-green-500 text-white" />
                        </td>
                        <td class=" py-4">
                            <a href="{{ route('trainer.posts', ['id' => $user['id']]) }}"
                                class="bg-gradient-to-tl from-purple-700 to-pink-500 text-white px-3 rounded-xl">Show</i></a>
                        </td>
                        <td class="px-6 py-4">
                            <div class="rounded-full border w-8 h-8 content-center text-center py-1 ">
                                <button class="deleteBtn" type="button" data-modal-toggle="popup-modal" id="{{$user['id']}}"><i class="fa fa-trash"
                                        style="color: red"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
