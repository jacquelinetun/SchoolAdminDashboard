@extends('main')
@section('adminDashboard')
<div class="container-fluid px-4">
    <div class="card" style="margin: 20px;">
        <div class="card-header">Students Page</div>
        <div class="card-body">
        <p class="card-text">Name : {{ $students->name }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Major : {{ $students->major }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <hr>
        <a class="btn-hover text-decoration-none btn btn-outline-success" href="{{ url()->previous() }}"> Back</a>
        </div>
    </div>

</div>
@endsection
