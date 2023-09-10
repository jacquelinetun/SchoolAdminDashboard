@extends('main')

@section('adminDashboard')
<div class="container-fluid px-4">
    <!-- Header-->
    <div class="container px-5 pb-5 mt-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="fs-3 fw-light text-light">A School Where Your Children</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-light">be success and grow</span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-success btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="{{route('student.create')}}">Enroll</a>
                            <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="{{route('about')}}">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Styles -->
<style>
    html, body {
        background-image: url({{asset('template/assets/img/school.jpg')}});
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
</div>
@endsection
