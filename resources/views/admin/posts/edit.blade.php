@extends('layouts.app-post')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-light">Edit Content</div>
                <div class="card-body">
                    <form action="{{ route('admin.posts.update', ['post' => $post->slug ]) }}" method="POST" enctype="multipart/form-data">
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
                            <label for="section" class="col-md-2 col-form-label text-md-right">Section</label>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="checkbox" name="section" value="blog" @if($post->section === 'blog') checked @endif>
                                    <label>Blog</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="section" value="history" @if($post->section === 'history') checked @endif>
                                    <label>History</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="section" value="literature" @if($post->section === 'literature') checked @endif>
                                    <label>Literature</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="section" value="prayers" @if($post->section === 'prayers') checked @endif>
                                    <label>Prayers</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="image" class="col-md-2 col-form-label text-md-right">Image</label>
                            <div class="col-md-8">
                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ $post->image }}" autocomplete="image" autofocus>
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
                                <input id="alt_text" type="text" class="form-control @error('alt_text') is-invalid @enderror" name="alt_text" value="{{ $post->alt_text }}" required autocomplete="alt_text" autofocus>
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
                                <input id="meta_description" type="text" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" value="{{ $post->meta_description }}" required autocomplete="meta_description" autofocus>
                                @error('meta_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-md-2 col-form-label text-md-right">Status</label>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input type="checkbox" name="status" value="draft" @if($post->status === 'draft') checked @endif>
                                    <label>Draft</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" name="status" value="published" @if($post->status === 'published') checked @endif>
                                    <label>Published</label>
                                </div>
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
                        <div class="col-md-6 offset-md-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
