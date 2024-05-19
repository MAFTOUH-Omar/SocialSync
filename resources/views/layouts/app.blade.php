<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=Archivo+Black&family=Kanit:wght@300&family=Rajdhani:wght@500&family=Sora:wght@500&family=Source+Code+Pro:wght@300&family=Ubuntu&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite('resources/css/app.css')
        <script src="{{ asset('library/flowbite.min.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-blue-50">
            @include('layouts.navigation', ['user' => Auth::user()])

            <!-- Page Content -->
            <div class="container">
                @yield('content')
            </div>
        </div>
    </body>
</html>
