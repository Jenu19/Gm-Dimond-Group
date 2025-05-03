<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GM Dimond Group</title>

    <!-- Favicon -->
    <link href="{{ url(env('ASSETPATHURL') . 'admin/images/placeholder.jpg') }}" rel="icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link href="{{ url(env('ASSETPATHURL') . 'admin/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Sweetalert CSS -->
    <link href="{{ url(env('ASSETPATHURL') . 'admin/css/sweetalert/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{ url(env('ASSETPATHURL') . 'admin/css/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url(env('ASSETPATHURL') . 'admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ url(env('ASSETPATHURL') . 'admin/css/responsive.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <main>
        <div class="wrapper">
            @include('admin.layout.header')
            @include('admin.layout.sidebar')
            <div class="main-content">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
            {{-- <footer class="py-3 text-center bg-white fixed-bottom border-top">Copyright © 2025 GM Dimond Group All
                Rights Reserved
            </footer> --}}
        </div>
    </main>

    <!-- jQuery JS -->
    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/jquery/jquery-3.7.0.min.js') }}"></script>
    <!-- Sweetalert JS -->
    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/sweetalert/sweetalert2.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/datatables/dataTables.min.js') }}"></script><!-- Datatables JS -->
    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/datatables/dataTables.bootstrap5.min.js') }}"></script><!-- Datatables Bootstrap5 JS -->
    <script src="{{ url(env('ASSETPATHURL') . 'admin/js/common.js') }}"></script>
    @yield('script')
</body>

</html>
