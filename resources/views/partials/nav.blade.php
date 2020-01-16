<nav class="navbar navbar-expand-lg fixed-top navbar-dark py-0 shadow" style="background-color: #325D88;">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('speakers') }}">Speakers</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">AA Stuff</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('bigbook') }}">AA Big Book</a>
                    <a class="dropdown-item" href="{{ route('preamble') }}">AA Preamble</a>
                    <a class="dropdown-item" href="{{ route('12steps') }}">The 12 Steps</a>
                    <a class="dropdown-item" href="{{ route('12traditions') }}">The 12 Traditions</a>
                    <a class="dropdown-item" href="{{ route('literature') }}">AA Literature</a>
                    <a class="dropdown-item" href="{{ route('prayers') }}">AA Prayers</a>
                    <a class="dropdown-item" href="{{ route('history') }}">AA History</a>
                    <div class="dropdown-divider border-bottom mx-3"></div>
                    <a class="dropdown-item" href="https://aa.org/pages/en_US/alcoholics-anonymous-audio-version" target="_blank">Audio Bg Book</a>
                    <a class="dropdown-item" href="https://aa.org/pages/en_US/twelve-steps-and-twelve-traditions-audio-version" target="_blank">Audio 12 x 12</a>
                    <div class="dropdown-divider border-bottom mx-3"></div>
                    <a class="dropdown-item" href="#">Find a Sponsor</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    @can('isAdmin')
                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">User Management</a>
                    <a class="dropdown-item" href="{{ route('admin.posts.index') }}">Content Management</a>
                    <a class="dropdown-item" href="{{ route('admin.speakers.index') }}">Speaker Management</a>
                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    @endcan
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">User Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
        <form class="form-inline py-2 pl-2" role="search" method="get" action="{{ route('search') }}">
            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
