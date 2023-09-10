@extends('main')
@section('adminDashboard')
<div class="container-fluid px-4">
    <div class="card" style="margin: 20px;">
        <div class="card-header">Create New Student</div>
        <div class="card-body">
            <form action="{{route('student.store')}}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control">
                <small class="text-danger">
                    @error('name')
                        {{ $message}}
                    @enderror
                </small>
            </br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control">
                <small class="text-danger">
                    @error('address')
                        {{ $message}}
                    @enderror
                </small></br>
                <label>Major</label></br>
                <input type="text" name="major" id="major" class="form-control">
                <small class="text-danger">
                    @error('major')
                        {{ $message}}
                    @enderror
                </small></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control">
                <small class="text-danger">
                    @error('mobile')
                        {{ $message}}
                    @enderror
                </small></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
</div>
@endsection
