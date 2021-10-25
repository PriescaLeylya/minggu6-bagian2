@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('STUDENT DATA DETAILS') }}</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <tr><th>Id</th><th>:</th><td>{{ $student->id }}</td></tr>
                        <tr><th>NIM</th><th>:</th><td>{{ $student->nim }}</td></tr>
                        <tr><th>Name</th><th>:</th><td>{{ $student->name }}</td></tr>
                        <tr><th>Class</th><th>:</th><td>{{ $student->class }}</td></tr>
                        <tr><th>Department</th><th>:</th><td>{{ $student->department }}</td></tr>
                        <tr><th>Phone Number</th><th>:</th><td>{{ $student->phone_number }}</td></tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection