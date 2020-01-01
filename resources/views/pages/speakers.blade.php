@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Speaker</th>
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
@endsection
