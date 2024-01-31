@extends('layouts.app')

@section('main', 'Sales')
@section('sub', 'All Sales')

@section('content')
    <div class="mb-5">
        <form action="{{ route('sales.filter') }}" method="POST" id="graph">
            @csrf
            <div class="flex">
                <div>
                    <label for="id">Trainer Name</label>
                    <select id="id" name="id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 mr-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @foreach ($trainers as $trainer)
                            @if (isset($trainer_id) && $trainer_id == $trainer['id'])
                                <option value="{{ $trainer['id'] }}" selected>{{ $trainer['name'] }}</option>
                            @else
                                <option value="{{ $trainer['id'] }}">{{ $trainer['name'] }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="start_date">Start Date</label>
                    <input type="date" @if (isset($start_date)) value="{{ $start_date }}" @endif
                        name="start_date" id="start_date" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 mr-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="end_date">End Date</label>
                    <input type="date" @if (isset($end_date)) value="{{ $end_date }}" @endif
                        name="end_date" id="end_date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 mr-4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <br>
                    <button type="submit"
                        class="inline-block px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-purple-700 to-pink-500 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Filter</button>
                </div>

            </div>
        </form>
    </div>
    {{-- ---------------------table--------------------- --}}

    <div class="relative w-full p-5 overflow-x-auto bg-white shadow-lg mt sm:rounded-xl">
        <table id="data_table" class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400"
            style="width:100%">
            <thead class="mt-4 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($orders) && isset($events))
                    @foreach ($orders as $order)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <td scope="row"
                                class="flex items-center py-4 text-gray-900 p whitespace-nowrap dark:text-white">
                                <div class="">
                                    <div class="text-base font-semibold">{{ $order['name'] }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['date'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['amount'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order['type'] }}
                            </td>
                        </tr>
                    @endforeach
                    @foreach ($events as $event)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <td scope="row"
                                class="flex items-center py-4 text-gray-900 p whitespace-nowrap dark:text-white">
                                <div class="">
                                    <div class="text-base font-semibold">{{ $event['name'] }}</div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                {{ $event['date'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event['amount'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $event['type'] }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
