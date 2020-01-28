@extends('layouts.app')
@section('content')
<div class="row m-0">
    <div class="col-md-12 col-lg-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card p-2 mb-4" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('img/under_construction.jpg') }}" class="card-img" alt="under construction">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-2">
                                    <h5 class="card-title">Speaker tapes being uploaded</h5>
                                    <p class="card-text">There are limited speaker tapes on the site now, but we will be uploading more soon. Appologies for the construction mess.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">All Speaker Tapes</div>
                    <div class="card-body">
                        <p class="card-text">All complete list of speaker tapes</p>
                        <a href="{{ route('speakers.all') }}" class="btn btn-sm btn-outline-warning shadow">All Tapes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Top 50 Speaker Tapes</div>
                    <div class="card-body">
                        <p class="card-text">Top 50 on the site</p>
                        <a href="{{ route('speakers.top50') }}" class="btn btn-sm btn-outline-warning shadow">Top 50 Tapes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Sandy Beach - Sat. Morning Live</div>
                    <div class="card-body">
                        <p class="card-text">Saturday Morning Live, Steps 1-12, 1994</p>
                        <a href="{{ route('speakers.sandy_sml') }}" class="btn btn-sm btn-outline-warning shadow">Sat. Morning Live</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Sandy Beach - Best Of</div>
                    <div class="card-body">
                        <p class="card-text">Some of Sandy's Best</p>
                        <a href="{{ route('speakers.sandy_best') }}" class="btn btn-sm btn-outline-warning shadow">Sandy's Best</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Joe and Charlie Big Book Study</div>
                    <div class="card-body">
                        <p class="card-text">Joe and Charlie's Big Book audio tapes</p>
                        <a href="{{ route('speakers.joe_charlie') }}" class="btn btn-sm btn-outline-warning shadow">Joe and Charlie</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Clarence Snyder</div>
                    <div class="card-body">
                        <p class="card-text">One of the original members of the Oxford Group!</p>
                        <a href="{{ route('speakers.clarence') }}" class="btn btn-sm btn-outline-warning shadow">Clarence Snyder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Funny Speaker Tapes</div>
                    <div class="card-body">
                        <p class="card-text">Speaker tapes on the lighter side</p>
                        <a href="{{ route('speakers.funny') }}" class="btn btn-sm btn-outline-warning shadow">Funny Tapes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar2')
</div>
@endsection
