<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center ml-4 mr-3 py-2 border-bottom">
    <h4><span class="title-line2"></span>{{ $header ?? '' }}</h4>
    <div class="btn-toolbar">
        <div class="btn-group mx-3 mb-1">
            {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Share</button> --}}
            <a href="{{ route('home') }}" class="btn btn-sm btn-outline-secondary">Home</a>
            <a href="{{ route('blog') }}" class="btn btn-sm btn-outline-secondary">Blog</a>
            <a href="{{ route('speakers') }}" class="btn btn-sm btn-outline-secondary">Speakers</a>
        </div>
    </div>
</div>
