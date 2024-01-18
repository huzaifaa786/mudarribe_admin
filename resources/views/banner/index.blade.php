@extends('layouts.app')
@section('main', 'Banner')
@section('sub', '')

@section('content')

    <div class="flex justify-center">
        <div class=" bg-gray-200 rounded-xl shadow-xl p-6 w-1/2">
            <div class="bg-white rounded-xl shadow-lg">
                <div class="flex flex-row justify-between p-3">
                    <div class="">
                        <h5 class="text-sm font-semibold">Banner Charges</h5>
                        <p class="text-lg font-bold text-black">{{$banner['amount']}}</p>
                    </div>
                    <div class="my-auto bg-gradient-to-tl from-purple-700 to-pink-500 text-white rounded-xl text-center px-3 py-1">
                        <button data-modal-toggle="edit-modal" id="{{$banner['id']}}" amount={{$banner['amount']}} class="editBtn"
                            class="editBtn">Update
                            Charges</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('components.modals.bannerEditModal')
@endsection

@section('script')
<script>
    //-------------edit model call----------------------
    $('.editBtn').click(function() {
        let id = this.id;
        let amount = $(this).attr('amount');
        $('#edit-modal form').attr('action', '{{route('banner.update')}}');
        $('#banner_id').val(id);
        $('#amount_input').val(amount);
    });
</script>
@endsection
