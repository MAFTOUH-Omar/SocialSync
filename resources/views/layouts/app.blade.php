<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha384-lCS6qG9Z6k6PQjVEZ8FBb2Kax3U0STrn3U02p4rCU5s62Ke4tllkUz3/Ea6BxQnP" crossorigin="anonymous">

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
