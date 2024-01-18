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
                        Coupon Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Discout Percentage
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coupons as $coupon)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td scope="row" class="flex items-center p py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="">
                                <div class="text-base font-semibold">{{ $coupon['CouponCode'] }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $coupon['DiscountPercentage'] }}
                        </td>
                        <td class=" py-4">
                            <div class="rounded-full border w-8 h-8 content-center text-center py-1 ">
                                <button class="editBtn" type="button" data-modal-toggle="edit-modal" id="{{$coupon['id']}}" couponcode="{{$coupon['CouponCode']}}" discountPercentage="{{$coupon['DiscountPercentage']}}"><i class="fa fa-edit"
                                        style="color: blue"></i></button>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="rounded-full border w-8 h-8 content-center text-center py-1 ">
                                <button class="deleteBtn" type="button" data-modal-toggle="popup-modal" id="{{$coupon['id']}}"><i class="fa fa-trash"
                                        style="color: red"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('components.modals.couponEditModel')
@endsection

@section('script')

<script>
//----------delete confirmation model call----------
    $('.deleteBtn').click(function() {
        let id = this.id;
        $('#popup-modal form').attr('action', '{{ route('coupon.delete', '') }}' + '/' + id);
    });

//-------------edit model call----------------------
    $('.editBtn').click(function() {
        let id = this.id;
        let couponcode = $(this).attr('couponcode');
        let discountpercentage = $(this).attr('discountPercentage');
        $('#edit-modal form').attr('action', '{{route('coupon.update')}}');
        $('#coupon_id').val(id);
        $('#code_input').val(couponcode);
        $('#discount_percentage').val(discountpercentage);
    });
</script>
@endsection
