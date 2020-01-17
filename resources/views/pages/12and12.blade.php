@extends('layouts.app')
@section('content')
<div class="row m-0">
    <div class="col-md-12 col-lg-8">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">12 x 12 - PDF Version</div>
                    <div class="card-body">
                        <p class="card-text">A complete pdf file - all chapters</p>
                        <a href="{{ asset('dnld/12and12.pdf') }}" target="_blank" class="btn btn-sm btn-outline-warning">PDF Version</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4 shadow">
                    <div class="card-header bg-light border-bottom h5">Link to audio version at aa.org</div>
                    <div class="card-body">
                        <p class="card-text">Navigate to each chapter or story</p>
                        <a href="https://aa.org/pages/en_US/twelve-steps-and-twelve-traditions-audio-version" target="_blank" class="btn btn-sm btn-outline-warning">Audio Version</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.sidebar2')
</div>
@endsection
