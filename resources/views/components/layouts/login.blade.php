<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Mudarribe-admin Login</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('admin/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="{{asset('admin/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5')}}" rel="stylesheet" />

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    <wireui:scripts />
    @filamentStyles
    @vite('resources/css/app.css')
    @livewireStyles
</head>

  <body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">
    @livewireScripts
    {{$slot}}

  </body>
  <script>
    Livewire.on('redirect-to-admin-index', () => {
        window.location.href = '/admin/index';
    });
    </script>
  <!-- plugin for scrollbar  -->
  <script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
  <!-- main script file  -->
  <script src="{{asset('admin/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5')}}" async></script>
</html>
