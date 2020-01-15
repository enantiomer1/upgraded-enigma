@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-4 shadow">
                <div class="card-header bg-light">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0">Drafts - Blog, History, Literature and Prayers</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-secondary">Add Content</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered mt-2">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Section</th>
                                <th scope="col">Status</th>
                                <th scope="col">Publish Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($drafts as $draft)
                            <tr>
                                <td>{{ $draft->title }}</td>
                                <td>{{ $draft->section }}</td>
                                <td>{{ $draft->status }}</td>
                                <td>{{ $draft->published_date }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $draft->slug) }}" class="float-left pl-2 pr-2"><button type="button" class="btn btn-sm btn-info">Edit</button></a>
                                    <form action="{{ route('admin.posts.destroy', $draft->id) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $drafts->links() }} --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0">Published - Blog, History, Literature and Prayers</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-secondary">Add Content</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered mt-2">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Section</th>
                                <th scope="col">Status</th>
                                <th scope="col">Publish Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($published as $publish)
                            <tr>
                                <td>{{ $publish->title }}</td>
                                <td>{{ $publish->section }}</td>
                                <td>{{ $publish->status }}</td>
                                <td>{{ $publish->published_date }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.edit', $publish->slug) }}" class="float-left pl-2 pr-2"><button type="button" class="btn btn-sm btn-info">Edit</button></a>
                                    <form action="{{ route('admin.posts.destroy', $publish->id) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  {{-- {{ $published->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
