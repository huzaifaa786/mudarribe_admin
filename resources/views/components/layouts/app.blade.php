<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('admin/assets/img/favicon.png') }}" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{ asset('admin/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('admin/assets/css/soft-ui-dashboard.css?v=1.0.7') }}" rel="stylesheet" />


   {{-- data table links --}}
    <link rel="stylesheet"  href="{{ asset('admin/assets/css/data-table.css') }}"/>


   <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="Mudarribe Fitness" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

<body class="antialiased m-0 font-sans text-base font-normal leading-default bg-gray-50 text-slate-500" >


    @filamentScripts
    @vite('resources/js/app.js')

    @include('components.layouts.navbar')

    @include('components.layouts.sidebar')

    <script src="{{asset('admin/assets/js/soft-ui-dashboard.min.js?v=1.0.7')}}"></script>
</body>
<!-- plugin for scrollbar  -->
<script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="{{asset('admin/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5')}}" async></script>
<!-- plugin for charts  -->
<script src="{{asset('admin/assets/js/plugins/chartjs.min.js')}}" async></script>

<script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>


<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script>
   new DataTable('#users_table');
</script>
</html>
