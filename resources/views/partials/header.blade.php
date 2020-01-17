<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ml-4 mr-3 py-2 border-bottom">
    <h4>{{ $header ?? '' }}</h4>
    <div class="btn-toolbar">
        <div class="btn-group dropdown">
            <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary">Home</a>
            <a href="{{ route('blog') }}" class="btn btn-sm btn-outline-secondary">Blog</a>
            <a href="{{ route('speakers') }}" class="btn btn-sm btn-outline-secondary">Speakers</a>
            <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
            @include('partials.dropdown')
        </div>
    </div>
</div>
