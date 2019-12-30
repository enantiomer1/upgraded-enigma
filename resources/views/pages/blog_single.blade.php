@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div class="card mb-3 shadow">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        <h4 class="card-title border-bottom pb-2">{{ $post->title }}</h4>
                        <div class="border-bottom pb-3">{!! $post->content !!}</div>
                        <h6 class="card-text pt-3"><span class="title-line2"></span>Published {{ $post->published_date->format('m/d/Y') }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar2')
</div>
@endsection
