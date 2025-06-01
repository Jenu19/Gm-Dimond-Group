<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DIAMOND | VALLEY</title>

    <!-- Favicon -->
    <link href="{{ url(env('ASSETPATHURL') . 'admin/images/placeholder.jpg') }}" rel="icon">
    <!-- Customized Font Stylesheet -->
    <link href="{{ url(env('ASSETPATHURL') . 'web/font/poppins/stylesheet.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    @include('web.layout.header')
    @yield('content')
    @include('web.layout.footer')

    @yield('script')
</body>

</html>
