<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

        <style>
            *{
                font-family: "Rubik", sans-serif;
            }
        </style>

        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased bg-background">
        @include('layout.sidebar')
        <div class="px-5 py-2 ms-72">
            @include('layout.content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script
            type="text/javascript"
            src="{{url('/js/tw-elements.umd.min.js')}}"></script>

        @stack('scripts')
    </body>
</html>
