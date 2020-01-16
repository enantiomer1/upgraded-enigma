@extends('layouts.app')
@section('content')
<div class="row m-0">
    <div class="col-md-12 col-lg-8">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Big Book - Text Version</div>
                    <div class="card-body">
                        <p class="card-text">A simple text version good for searching</p>
                        <a href="{{ route('bbtext') }}" class="btn btn-sm btn-outline-warning">Text Version</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Big Book - PDF Version</div>
                    <div class="card-body">
                        <p class="card-text">A complete pdf file - all chapters</p>
                        <a href="{{ asset('dnld/big_book.pdf') }}" class="btn btn-sm btn-outline-warning">PDF Version</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Link to Audio Version at aa.org</div>
                    <div class="card-body">
                        <p class="card-text">Navigate to each chapter or story</p>
                        <a href="https://aa.org/pages/en_US/alcoholics-anonymous-audio-version" target="_blank" class="btn btn-sm btn-outline-warning">Audio Version</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar2')
</div>
@endsection
