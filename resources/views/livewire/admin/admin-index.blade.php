<div>
    <div class="relative overflow-x-auto shadow-lg sm:rounded-xl  bg-white p-5 ">
        <table id="users_table" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" style="width:100%">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 mt-4">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        User Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <td scope="row" class="flex items-center px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <div class="ps-3">
                            <div class="text-base font-semibold">{{$user->displayName}}</div>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        {{$user->email}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                           {{$user->phoneNumber}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                           {{$user->email}}
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <a href=""> <i class="fa fa-trash  fa-lg" style="color: red" ></i></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>


</div>
