@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('USER DATA DETAILS') }}</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <tr><th>Id</th><th>:</th><td>{{ $user->id }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
                        <tr><th>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
                        <tr><th>Password</th><th>:</th><td>{{ $user->password }}</td></tr>
                        <tr><th>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection