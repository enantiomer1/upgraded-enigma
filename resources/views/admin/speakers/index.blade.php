@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0">Speaker Tape Management</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('admin.speakers.create') }}" class="btn btn-sm btn-secondary">Add Speaker Tapes</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Place</th>
                                 <th scope="col">File</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($speakers as $speaker)
                            <tr>
                                <td>{{ $speaker->name }}</td>
                                <td>{{ $speaker->title }}</td>
                                <td>{{ $speaker->place }}</td>
                                <td>{{ $speaker->file }}</td>
                                <td>{{ $speaker->date->format('m/d/Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.speakers.edit', $speaker->id) }}" class="float-left pl-2 pr-2"><button type="button" class="btn btn-sm btn-info">Edit</button></a>
                                    <form action="{{ route('admin.speakers.destroy', $speaker->id) }}" method="POST" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $speakers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
