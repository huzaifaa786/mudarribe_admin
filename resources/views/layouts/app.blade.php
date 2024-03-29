<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon.png') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('admin/assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />
    {{-- data table links --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/css/data-table.css') }}" />

    <script defer data-site="Mudarribe Fitness" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    @yield('style')
    <wireui:scripts />

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    @vite('resources/css/app.css')
    <div x-data="{ open: true }">
        <button @click="open = !open" class=" p-3 text-gray-800 focus:outline-none">
            <svg x-show="!open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
            </svg>
            <svg x-show="open" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        @include('layouts.navbar')
        @include('layouts.sidebar')
    </div>


    {{------- delete confirmation modal -------}}
    @include('components.modals.deleteModal')

</body>

<script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="{{ asset('admin/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5') }}" async></script>
<script src="{{ asset('admin/assets/js/plugins/chartjs.min.js') }}" async></script>
<script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js">
</script>

<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
<script src="{{asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('assets/pages/dashborad.js')}}"></script>
{{-- data table script --}}
<script>
    new DataTable('#data_table');
</script>

{{-- sidebar scripts --}}
<script defer=""
    src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
    data-cf-beacon="{&quot;rayId&quot;:&quot;82b340517fae4631&quot;,&quot;version&quot;:&quot;2023.10.0&quot;,&quot;token&quot;:&quot;1b7cbb72744b40c580f8633c6b62637e&quot;}"
    crossorigin="anonymous"></script>
<script src="https://demos.creative-tim.com/soft-ui-flowbite-pro/app.bundle.js"></script>

{{----------------delete modal script-------------------}}
<script>
    $('.deleteBtn').click(function() {
        let id = this.id;
        $('#popup-modal form').attr('action', '{{ route('trainer.delete', '') }}' + '/' + id);
    });
</script>

@yield('script')

</html>
