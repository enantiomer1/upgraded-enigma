@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Speaker</th>
                        <th scope="col">Description</th>
                        <th scope="col">Play / Download</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($speakers as $speaker)
                    <tr>
                        <td>{{ $speaker->speaker_name }}</td>
                        <td>{{ $speaker->description }}</td>
                        <td><a href="/storage/speaker/{{$speaker->file}}" class="btn btn-sm btn-outline-warning ml-2">Listen / Download</a>
                            {{-- <audio controls>
                                <source src="/storage/speaker/{{$speaker->file}}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio> --}}
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
