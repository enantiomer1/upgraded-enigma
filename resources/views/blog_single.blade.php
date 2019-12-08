@extends('layouts.app', ['title' => $post->title, 'header' => 'Recent Article'])
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div class="card mb-3 shadow">
            <div class="row no-gutters">

                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="card-title pb-3 border-bottom"><span class="title-line bg-primary"></span>{{ $post->title }}</h4>
                        {!! $post->content !!}
                        <h5 class="card-text">Written by {{ implode(', ',$post->user()->get()->pluck('name')->toArray()) }} {{ $post->published_date }}</h5>
                    </div>
                </div>
            </div>
        </div>
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
</div @endsection
