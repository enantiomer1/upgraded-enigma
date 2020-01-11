@extends('layouts.app')
@section('content')
<div class="row m-0">
    <div class="col-md-12 col-lg-8">
        @foreach ($posts as $post)
        <div class="card p-2 mb-4 shadow">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="card-body p-2">
                        <img src="/storage/img/{{$post->image}}" class="card-img" alt="{{ $post->alt_text }}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body p-2">
                        <h5 class="card-title border-bottom pb-2">{{ $post->title }}</h5>
                        <p class="card-text border-bottom pb-3">{{ $post->description }}</p>
                        <p class="card-text"><small class="text-muted">Published {{ $post->published_date->format('m/d/Y') }}</small><a href="{{ route('search_single', $post->slug) }}" class="btn btn-sm btn-outline-warning ml-4 shadow">Read More</a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $posts->links() }}
    </div>
    @include('partials.sidebar2')
</div>
@endsection
