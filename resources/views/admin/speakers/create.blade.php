@extends('layouts.app-post')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-light">Create Speaker Tape</div>
                <div class="card-body">
                    <form action="{{ route('admin.speakers.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ ('Enter Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="{{ ('Enter Title') }}" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="place" class="col-md-2 col-form-label text-md-right">Place</label>
                            <div class="col-md-8">
                                <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" placeholder="{{ ('Enter Place') }}" name="place" value="{{ old('place') }}" required autocomplete="place" autofocus>
                                @error('place')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-md-2 col-form-label text-md-right">File</label>
                            <div class="col-md-8">
                                <input id="file" type="file" class="form-control-file @error('file') is-invalid @enderror" name="file" value="{{ old('file') }}" required autocomplete="file" autofocus>
                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-2 col-form-label text-md-right">Date</label>
                            <div class="col-md-8">
                                <input id="date" type="text" class="form-control @error('date') is-invalid @enderror" placeholder="{{ ('Enter Date YYYY-MM-DD') }}" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-primary ml-4">Create Speaker Tape</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
