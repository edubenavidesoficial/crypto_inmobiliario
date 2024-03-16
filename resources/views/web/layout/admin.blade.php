@include('web.layout.header')

<body>
    <div id="app">
        @include('web.layout.header_menu')
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <sidebar-admin-page></sidebar-admin-page>
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    </div>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @include('web.layout.footer')
