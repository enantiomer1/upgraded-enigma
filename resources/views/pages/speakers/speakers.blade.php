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
                        <a href="{{ route('speakers.all') }}" class="btn btn-sm btn-outline-warning">All Tapes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Top 50 Speaker Tapes</div>
                    <div class="card-body">
                        <p class="card-text">Top 50 of all time</p>
                        <a href="{{ route('speakers.all') }}" class="btn btn-sm btn-outline-warning">Top 50 Tapes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Sandy Beach</div>
                    <div class="card-body">
                        <p class="card-text">A collection of Sandy B's best</p>
                        <a href="{{ route('speakers.sandy') }}" class="btn btn-sm btn-outline-warning">Sandy Beach</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Joe and Charlie Big Book Study</div>
                    <div class="card-body">
                        <p class="card-text">Joe and Charlie's Big Book audio tapes</p>
                        <a href="{{ route('speakers.all') }}" class="btn btn-sm btn-outline-warning">Joe and Charlie</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Clarence Snyder</div>
                    <div class="card-body">
                        <p class="card-text">One of the original members of the Oxford Group!</p>
                        <a href="{{ route('speakers.all') }}" class="btn btn-sm btn-outline-warning">Clarence Snyder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Funny Speaker Tapes</div>
                    <div class="card-body">
                        <p class="card-text">Speaker tapes on the lighter side</p>
                        <a href="{{ route('speakers.all') }}" class="btn btn-sm btn-outline-warning">Funny Tapes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar2')
</div>
@endsection
