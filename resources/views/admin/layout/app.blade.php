<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <title>SCHOOL</title>
        <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">

        <link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/js/plugins/slick/slick-theme.css')}}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
        
        @yield('custom-style')
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            @include('admin.layout.aside')
            @include('admin.layout.header')

            <main style="background: #f0f2f5;" id="main-container">
                @yield('content')
            </main>

            @include('admin.layout.footer')
        </div>

        <script src="{{asset('assets/js/codebase.core.min.js')}}"></script>
        <script src="{{asset('assets/js/codebase.app.min.js')}}"></script>
        @yield('custom-script')
    </body>
</html>