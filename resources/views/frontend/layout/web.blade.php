<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>{{ config('app.name', 'Alesha Food & Beverage') }}</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="{{ 'frontend' }}/images/favicon.ico" type="image/x-icon">

    <!-- Include all CSS -->
    @include('frontend.layout.includes.css')
    

</head>

<body>

    <!-- Per Page Loader -->
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>

    <div class="page text-center text-md-left">
        
        <!-- Web Header -->
        @include('frontend.layout.headers.header')

        <!-- Main Page Content -->
        @yield('content')

        <!-- Web Footer -->
        @include('frontend.layout.footers.footer')
        
    </div>

    <!-- Include All JS -->
    @include('frontend.layout.includes.js')

</body>

</html>
