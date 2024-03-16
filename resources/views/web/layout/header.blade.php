<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ config('app.name', 'Pulenta') }}</title>
    <!-- Chrome for Android theme color -->
    <meta name="theme-color" content="#000000">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Pulentaa">
    <link rel="icon" sizes="512x512" href="images/icons/icon-512x512.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Pulentaa">
    <link rel="apple-touch-icon" href="images/icons/icon-512x512.png">

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/icons/icon-512x512.png">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="shortcut icon" type="image/x-icon" href="uploads/settings/652822b2e975c.png">
    <link rel="icon" href="uploads/settings/652822b2e975c.png" type="image/png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="frontend/amazy/compile_css/app.css">
    <link rel="stylesheet" href="css/pulenta.css">
    <link rel="stylesheet" href="css/detalle_producto.css">
    <style>
        .promotion_bar_wrapper {
            background-image: url(uploads/images/21-10-2023/000.png) !important;
        }

        .banner_img {
            width: 100%;
            position: relative;
            overflow: hidden;
            display: block;
            padding-bottom: 31.5%;
        }

        .banner_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
    <!-- Scripts -->
    <script>
        const _config = { "currency_symbol": "$", "currency_symbol_position": "left_with_space", "decimal_limit": 2 };
        const _user_currency = [];
    </script>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
