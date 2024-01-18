@extends('layouts.app')

@section('main', 'Trainer')
@section('sub', 'Events')

@section('content')
    <div class="relative overflow-x-auto shadow-lg sm:rounded-xl  bg-white p-5 w-full">
        <table id="data_table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
            style="width:100%">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 mt-4">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Start Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        End Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Payment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td scope="row" class="flex items-center p py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="">
                                <div class="text-base font-semibold">{{ $event['title'] }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $event['startTime'] }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $event['endTime'] }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                {{ $event['price'] }}
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if ($event['eventType'] == 'free')
                                    <x-badge rounded label="Free" class="bg-green-500 text-white" />
                                @else
                                    <x-badge rounded label="Paid" class="bg-red-500 text-white" />
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if ($event['eventStatus'] == 'open')
                                    <x-badge rounded label="Open" class="bg-green-500 text-white" />
                                @else
                                    <x-badge rounded label="Closed" class="bg-red-500 text-white" />
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if ($event['paymentStatus'] == 'pending')
                                    <x-badge rounded label="Pending" class="bg-red-500 text-white" />
                                @else
                                    <x-badge rounded label="Paid" class="bg-green-500 text-white" />
                                @endif
                            </div>
                        </td>
                        <td class="px-3 py-4">
                            <img src="{{ $event['imageUrl'] }}" width="40" height="40" alt=""
                                        data-modal-target="image-{{ $event['id'] }}"
                                        data-modal-toggle="image-{{ $event['id'] }}" class="cursor-zoom-in">
                        </td>
                    </tr>
                     {{-- image model to show image --}}
                     <div id="image-{{ $event['id'] }}" tabindex="-1" aria-hidden="true"
                     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full bg-[#00000090]">
                     <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                         <!-- Modal content -->
                         <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                             <button type="button"
                                 class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                 data-modal-toggle="image-{{ $event['id'] }}">
                                 <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path fill-rule="evenodd"
                                         d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                         clip-rule="evenodd"></path>
                                 </svg>
                                 <span class="sr-only">Close modal</span>
                             </button>
                             <p class="mb-4 text-gray-500 dark:text-gray-300"></p>
                             <img src="{{ $event['imageUrl'] }}" alt="" class="h-auto w-96 object-contain">
                             <div class="flex justify-center items-center space-x-4">
                                 <button data-modal-toggle="image-{{ $event['id'] }}" type="button"
                                     class="mt-2 py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                     Close
                                 </button>
                             </div>
                         </div>
                     </div>
                 </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
