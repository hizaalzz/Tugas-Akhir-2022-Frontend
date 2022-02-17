<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Template and custom --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicoon.ico') }}">
    <link rel="stylesheet" href="{{ asset('/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/optional.css') }}">
    
     {{-- datatables --}}
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="{{ asset('templates/DataTables/media/css/jquery.dataTables.css') }}">
     <link rel="stylesheet" href="{{ asset('templates/DataTables/media/css/dataTables.bootstrap.css') }}">
    @livewireStyles

    @yield('css')
</head>
<body data-layout="detached" data-topbar="colored">
    <div class="container-fluid">
        <div id="layout-wrapper">
            <header id="page-topbar">
                <x-topbar></x-topbar>
            </header>
            <x-sidebar></x-sidebar>
            <div class="main-content">
                <div class="page-content">
                    @yield('content')
                </div>
                <x-footer></x-footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/dependencies.js') }}"></script>

    <script src="{{ asset('/js/app.js') }}"></script>

    {{-- js datatables --}}
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script rel="stylesheet" href="{{ asset('templates/DataTables/media/js/jquery.dataTables.js') }}"></script>
            <script rel="stylesheet" href="{{ asset('templates/DataTables/media/js/jquery.dataTables.min.js') }}"></script>
     @stack('script-addon')
</body>
</html>