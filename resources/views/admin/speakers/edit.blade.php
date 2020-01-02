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
                            <label for="speaker_name" class="col-md-2 col-form-label text-md-right">Speaker Name</label>
                            <div class="col-md-8">
                                <input id="speaker_name" type="text" class="form-control @error('speaker_name') is-invalid @enderror" name="speaker_name" value="{{ $speaker->speaker_name }}" required autocomplete="speaker_name" autofocus>
                                @error('speaker_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label text-md-right">Description</label>
                            <div class="col-md-8">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $speaker->description }}" required autocomplete="description" autofocus>
                                @error('description')
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
