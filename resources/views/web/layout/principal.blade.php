@include('web.layout.header')


<body>

<div id="app">
    @include('web.layout.header_menu')
    @yield('content')
</div>
@vite(['resources/scss/app.scss', 'resources/js/app.js'])


 @include('web.layout.footer')
