@extends('layouts.app-post')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-light">Edit Speaker Tape</div>
                <div class="card-body">
                    <form action="{{ route('admin.speakers.update', ['speaker' => $speaker->id ]) }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $speaker->name }}" required autocomplete="name" autofocus>
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
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $speaker->title }}" required autocomplete="title" autofocus>
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
                                <input id="place" type="text" class="form-control @error('place') is-invalid @enderror" name="place" value="{{ $speaker->place }}" required autocomplete="place" autofocus>
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
                                <input id="file" type="file" class="form-control-file @error('file') is-invalid @enderror" name="file" value="{{ $speaker->file }}" autocomplete="file" autofocus>
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
                                <input id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $speaker->date }}" required autocomplete="date" autofocus>
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary ml-4">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
