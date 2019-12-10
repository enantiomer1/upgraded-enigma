@extends('layouts.app', ['title' => $post->title, 'header' => 'AA History'])
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div class="card mb-3 shadow">
            <div class="row no-gutters">

                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="card-title pb-3 border-bottom"><span class="title-line bg-warning"></span>{{ $post->title }}</h4>
                        <div class="border-bottom">{!! $post->content !!}</div>
                        <h6 class="card-text pt-3"><span class="title-line bg-info"></span>Written by {{ implode(', ',$post->user()->get()->pluck('name')->toArray()) }} {{ $post->published_date->format('m/d/Y') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar2')
</div>
@endsection
