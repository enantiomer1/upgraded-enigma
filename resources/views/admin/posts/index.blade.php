@extends('layouts.app', ['title' => 'Post Managment', 'header' => 'Post Management'])
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0">{{ __('Posts') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-success">{{ __('Add Post') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Section</th>
                                <th scope="col">Publish Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ implode(', ',$post->user()->get()->pluck('name')->toArray()) }}</td>
                                <td>{{ $post->section }}</td>
                                <td>{{ $post->published_date }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $post->slug) }}" class="float-left pl-2 pr-2"><button type="button" class="btn btn-sm btn-info">Edit</button></a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
