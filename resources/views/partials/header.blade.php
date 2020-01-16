<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ml-4 mr-3 py-2 border-bottom">
    <h4><span class="title-line2"></span>{{ $header ?? '' }}</h4>
    <div class="btn-toolbar">
        <div class="btn-group dropdown">
            <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary">Home</a>
            <a href="{{ route('blog') }}" class="btn btn-sm btn-outline-secondary">Blog</a>
            <a href="{{ route('speakers') }}" class="btn btn-sm btn-outline-secondary">Speakers</a>
            <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ route('preamble') }}">AA Preamble</a>
                <a class="dropdown-item" href="{{ route('12steps') }}">The 12 Steps</a>
                <a class="dropdown-item" href="{{ route('12traditions') }}">The 12 Traditions</a>
                <a class="dropdown-item" href="{{ route('literature') }}">AA Literature</a>
                <a class="dropdown-item" href="{{ route('prayers') }}">AA Prayers</a>
                <a class="dropdown-item" href="{{ route('history') }}">AA History</a>
                <div class="dropdown-divider border-bottom mx-3"></div>

            </div>
        </div>
    </div>
</div>
