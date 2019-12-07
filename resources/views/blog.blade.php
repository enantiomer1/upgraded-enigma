@extends('layouts.app', ['title' => 'Blog', 'header' => 'Recent Articels'])
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-8">
        @foreach ($posts as $post)
        <div class="card mb-3 shadow">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $post->image }}" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ $post->published_date }}</small></p>
                        <a href="{{ route('blog_single', $post->slug) }}" class="btn btn-sm btn-success">{{ __('Read More') }}</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $posts->links() }}
    </div>
    <div class="col-lg-4 d-none d-lg-block">
        <div class="card">
            <div class="card-header">
                Sidebar
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>
@endsection