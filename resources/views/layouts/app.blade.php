<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@isset($title)
        {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/feather.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

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
                    @include('partials.alerts')
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
     <script>
      feather.replace()
    </script>
</body>
</html>
