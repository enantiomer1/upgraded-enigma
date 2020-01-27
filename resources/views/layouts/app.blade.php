<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@isset($title){{ $title }} | @endisset {{ config('app.name') }}</title>
    @isset($post->meta_description)<meta name="description" content="{{ $post->meta_description }}">@endisset

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

</head>
<body>
    <div id="app">
        @include('partials.nav')
        <div class="container-fluid">
            <div class="row">
                @include('partials.sidebar')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-1 px-sm-4">
                    @include('partials.header')
                    @include('partials.alerts')
                    <div class="container-fluid py-4 px-0">
                    @yield('content')
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
