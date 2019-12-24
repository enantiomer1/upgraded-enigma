@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row pb-4">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">My Profile</h5>
                    <p class="card-text">Manage Your Account Settings</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">User Profile</a>
                </div>
            </div>
        </div>
        @can('isAdmin')
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Content Management</h5>
                    <p class="card-text">Manage and Edit Content: Posts, History, Literature and Prayers</p>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Content Management</a>
                </div>
            </div>
        </div>
        @endcan
    </div>
    @can('isAdmin')
    <div class="row">
        <div class="col-sm-6">
             <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Speaker Tape Management</h5>
                    <p class="card-text">Manage and Edit Speaker Tapes</p>
                    <a href="{{ route('admin.speakers.index') }}" class="btn btn-primary">Speaker Tape Management</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User Management</h5>
                    <p class="card-text">Manage and Edit Users</p>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">User Management</a>
                </div>
            </div>
        </div>
    </div>
    @endcan
</div>
@endsection
