@extends('layouts.app', ['title' => 'AA History', 'header' => 'AA History'])
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-8">
        @foreach ($posts as $post)
        <div class="card mb-3 shadow">
            <div class="row no-gutters">
                <div class="col-md-4 pr-0">
                    <div class="card-body pr-0">
                    <img src="/storage/img/{{$post->image}}" class="card-img" alt="{{ $post->alt_text }}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title border-bottom pb-3"><span class="title-line bg-warning"></span>{{ $post->title }}</h5>
                        <p class="card-text border-bottom pb-3">{{ $post->description }}</p>
                        <p class="card-text"><small class="text-muted">Written by {{ implode(', ',$post->user()->get()->pluck('name')->toArray()) }} {{ $post->published_date->format('m/d/Y') }}</small><a href="{{ route('history_single', $post->slug) }}" class="btn btn-sm btn-primary ml-4">{{ __('Read More') }}</a></p>
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
