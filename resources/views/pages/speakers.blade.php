@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-light">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0">Speaker Tapes</h4>
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
                                <th scope="col">Play / Download</th>
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
                                    <a href="/storage/speaker/{{$speaker->file}}" class="btn btn-sm btn-outline-warning ml-2">Listen</a>
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
