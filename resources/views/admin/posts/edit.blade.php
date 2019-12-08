@extends('layouts.app-backend', ['title' => 'Edit Post', 'header' => 'Edit Post'])
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <div class="card-body">
                    <form action="{{ route('admin.posts.update', ['post' => $post->slug ]) }}" method="POST">
                        <div class="form-group row">
                            <label for="title" class="col-md-2 col-form-label text-md-right">Title</label>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}" required autocomplete="title" autofocus>
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
                                    {{ $post->description }}
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
                                    {{ $post->content }}
                                </textarea>
                                @error('content')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-2 col-form-label text-md-right">Image</label>
                            <div class="col-md-8">
                                <input id="image" type="text" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $post->image }}" required autocomplete="image" autofocus>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="seo_title" class="col-md-2 col-form-label text-md-right">SEO Title</label>
                            <div class="col-md-8">
                                <input id="seo_title" type="text" class="form-control @error('seo_title') is-invalid @enderror" name="seo_title" value="{{ $post->seo_title }}" required autocomplete="seo_title" autofocus>
                                @error('seo_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_description" class="col-md-2 col-form-label text-md-right">Meta Desciption</label>
                            <div class="col-md-8">
                                <input id="meta_description" type="text" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" value="{{ $post->meta_description }}" required autocomplete="meta_description" autofocus>
                                @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="meta_keywords" class="col-md-2 col-form-label text-md-right">Meta Keywords</label>
                            <div class="col-md-8">
                                <input id="meta_keywords" type="text" class="form-control @error('meta_keywords') is-invalid @enderror" name="meta_keywords" value="{{ $post->meta_keywords }}" required autocomplete="meta_keywords" autofocus>
                                @error('meta_keywords')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="published_date" class="col-md-2 col-form-label text-md-right">Published Date</label>
                            <div class="col-md-8">
                                <input id="published_date" type="text" class="form-control @error('published_date') is-invalid @enderror" name="published_date" value="{{ $post->published_date }}" required autocomplete="published_date" autofocus>
                                @error('published_date')
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
