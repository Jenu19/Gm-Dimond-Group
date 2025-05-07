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
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/style.css') }}" rel="stylesheet">
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    @yield('styles')
</head>

<body>
    @include('web.layout.header')
    @yield('content')
    @include('web.layout.footer')
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    @yield('script')
</body>

</html>
