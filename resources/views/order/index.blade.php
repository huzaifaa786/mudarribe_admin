@extends('layouts.app')

@section('main', 'Orders')
@section('sub', 'All Orders')

@section('content')
    <div class="relative overflow-x-auto shadow-lg sm:rounded-xl  bg-white p-5 w-full">
        <table id="data_table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            style="width:100%">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 mt-4">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        User Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Trainer Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Event Or Package Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Order Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Order Date
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">


                        <td class="px-6 py-4">
                            {{ $order['user']['name'] }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $order['trainer']['name'] }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($order['type'] == 'order')
                                {{ $order['plan']['name'] }}
                            @else
                                {{ $order['event']['title'] }}
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if ($order['type'] == 'order')
                                <x-badge rounded label="{{ ucfirst($order['type']) }}" class=" bg-green-500 text-white" />
                            @else
                                <x-badge rounded label="{{ ucfirst($order['type']) }}" class=" bg-blue-500 text-white" />
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $order['amount'] }} AED
                        </td>
                        <td class="px-6 py-4">
                            {{ Carbon\Carbon::createFromTimestampMs($order['id'])->format('d M Y') }}
                        </td>




                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
