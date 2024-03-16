<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts new-->
     <link rel="stylesheet" href="{{ asset('css/none.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
     <link type="text/css" rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="frontend/amazy/compile_css/app.css">
    <link rel="stylesheet" href="css/pulenta.css">
    <link rel="stylesheet" href="css/detalle_producto.css">

    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                      <img
                        src="uploads/settings/65284ca307ab2.png"
                        alt="Pulentaa"
                        title="Pulentaa" height="23px"
                      />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
              <right-side-nav-layout></right-side-nav-layout>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
