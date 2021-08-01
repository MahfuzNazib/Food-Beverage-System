<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ config('app.name', 'Alesha Food') }} </title>

    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

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
        <!-- Include Web Header -->
        @include('frontend.layout.headers.header')

        @yield('content')

        <!-- Include Web Footer -->
        @include('frontend.layout.footers.footer')
    </div>

    <!-- Include JS -->
    @include('frontend.layout.includes.js')
</body>

</html>
