@extends('layouts.app-post')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">Create Content</div>
                <div class="card-body">
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label for="description" class="col-md-2 col-form-label text-md-right">Description</label>
                            <div class="col-md-8">
                                <textarea id="description" rows="5" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>
                                    {{ old('description') }}
                                </textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-2 col-form-label text-md-right">Content</label>
                            <div class="col-md-8">
                                <textarea id="content" rows="20" class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content" autofocus>
                                    {{ old('content') }}
                                </textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="section" class="col-md-2 col-form-label text-md-right">Section</label>
                            <div class="col-md-8">
                                <select id="section" class="form-control @error('section') is-invalid @enderror" name="section" value="{{ old('section') }}" required autocomplete="section" autofocus>
                                    <option>blog</option>
                                    <option>history</option>
                                    <option>literature</option>
                                    <option>prayers</option>
                                </select>
                                @error('section')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-2 col-form-label text-md-right">Cover Image</label>
                            <div class="col-md-8">
                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alt_text" class="col-md-2 col-form-label text-md-right">Alt Text</label>
                            <div class="col-md-8">
                                <input id="alt_text" type="text" class="form-control @error('alt_text') is-invalid @enderror" name="alt_text" value="{{ old('alt_text') }}" required autocomplete="alt_text" autofocus>
                                @error('alt_text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_description" class="col-md-2 col-form-label text-md-right">Meta Desciption</label>
                            <div class="col-md-8">
                                <input id="meta_description" type="text" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" value="{{ old('meta_description') }}" required autocomplete="meta_description" autofocus>
                                @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="published_date" class="col-md-2 col-form-label text-md-right">Published Date</label>
                            <div class="col-md-8">
                                <input id="published_date" type="text" class="form-control @error('published_date') is-invalid @enderror" name="published_date" value="{{ old('published_date') }}" required autocomplete="published_date" autofocus>
                                @error('published_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        @csrf
                        @method('POST')
                        <button type="submit" class="btn btn-primary ml-4">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
