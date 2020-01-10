<nav class="col-md-2 d-none d-md-block bg-light sidebar shadow">
    <div class="sidebar-sticky py-3 px-2">
        <ul class="nav flex-column pt-2">
            <li class="nav-item">
                @auth
                <a class="nav-link" href="{{ route('profile.edit') }}">
                    <span class="dot bg-primary"></span>
                    User Profile
                </a>
                @endauth
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('preamble') }}">
                    <span class="dot bg-info"></span>
                    AA Preamble
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('12steps') }}">
                    <span class="dot bg-success"></span>
                    The 12 Steps
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="dot bg-warning"></span>
                    The 12 Traditions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('history') }}">
                    <span class="dot bg-primary"></span>
                    AA History
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('literature') }}">
                    <span class="dot bg-info"></span>
                    AA Literature
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('prayers') }}">
                    <span class="dot bg-warning"></span>
                    AA Prayers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.aagrapevine.org/" target="_blank">
                    <span class="dot bg-success"></span>
                    AA Grapevine
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="dot bg-dark"></span>
                    Joe And Charlie
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="dot bg-secondary"></span>
                    Sandy Beach
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('speakers') }}">
                    <span class="dot bg-success"></span>
                    Speaker Tapes
                </a>
            </li>
        </ul>
         <hr class="my-3 mx-3">
         <div class="p-4" style="position: absolute; bottom: 0;">
            <img src="{{ asset('img/logo.png') }}" class="img-fluid pr-3" alt="Step Depot">StepDepot.Net &copy;2020
         </div>
    </div>
</nav>
