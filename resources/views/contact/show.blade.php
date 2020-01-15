@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-light border-bottom h5">Send us a Note</div>
                <div class="card-body">
                    <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>
                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ ('Enter Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ ('Enter Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="subject" class="col-md-2 col-form-label text-md-right">Subject / Message</label>
                            <div class="col-md-8">
                                <textarea id="subject" rows="5" class="form-control @error('subject') is-invalid @enderror" name="subject" required autocomplete="subject" autofocus>
                                    {{ old('subject') }}
                                </textarea>
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        @csrf
                        @method('POST')
                        <div class="col-md-8 offset-md-2">
                            <button type="submit" class="btn btn-primary">Send Mail</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
