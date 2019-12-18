<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@isset($title){{ $title }} | @endisset {{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('partials.nav')
        <div class="container-fluid">
            <div class="row">
                @include('partials.sidebar')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    @include('partials.header')
                    @include('partials.alerts')
                    <div class="container-fluid pt-4">
                    @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
     <script>CKEDITOR.replace( 'content' );</script>
</body>
</html>
