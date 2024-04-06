@extends('layouts.app')

@section('main', 'Reports')
@section('sub', 'Suggestion & Reports')

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
                        User Account Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td scope="row" class="flex items-center p py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="">
                                <div class="text-base font-semibold">{{ $report['user']['name'] }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if ($report['user']['userType'] == 'trainer')
                                <x-badge rounded label="Trainer" class="bg-green-500 text-white" />
                            @else
                                <x-badge rounded label="Trainee" class="bg-red-500 text-white" />
                            @endif

                        </td>
                        <td class="px-6 py-4">
                            {{ $report['title'] }}
                        </td>

                        <td class="px-3 py-4">
                            @if ($report['imageUrl'] != null)
                                <img src="{{ $report['imageUrl'] }}" width="40" height="40" alt=""
                                    class="cursor-pointer" onclick="openModal('{{ $report['id'] }}')">
                                <div id="modal-{{ $report['id'] }}"
                                    class="hidden fixed z-10 top-0 left-0 w-full h-full bg-black bg-opacity-50 flex justify-center items-center">
                                    <div class="bg-white p-5 rounded-lg">
                                        <img src="{{ $report['imageUrl'] }}" width="400" height="400" alt="">
                                        <button class="absolute top-0 right-0 m-4"
                                            onclick="closeModal('{{ $report['id'] }}')">Close</button>
                                    </div>
                                </div>
                            @else
                                No Image attached.
                            @endif
                        </td>
                        <div id="image-{{ $report['id'] }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full bg-[#00000090]">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">

                                <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <button type="button"
                                        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="image-{{ $report['id'] }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <p class="mb-4 text-gray-500 dark:text-gray-300"></p>
                                    <img src="{{ $report['imageUrl'] }}" alt="" class="h-auto w-96 object-contain">
                                    <div class="flex justify-center items-center space-x-4">
                                        <button data-modal-toggle="image-{{ $report['id'] }}" type="button"
                                            class="mt-2 py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        function openModal(id) {
            document.getElementById('modal-' + id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById('modal-' + id).classList.add('hidden');
        }
    </script>
@endsection
