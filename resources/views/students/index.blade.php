@extends('main')
@section('adminDashboard')
<div class="container-fluid px-4">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Students Table (CRUD)</h2>
                {{-- </div>

                <div> --}}
                    @if (session()->has('flash_message'))
                    <div class="alert alert-success text-center">
                        {{session()->get('flash_message')}}
                    </div>

                    @endif
                </div>
                <div class="card-body">
                    <a class=" btn-hover text-decoration-none btn btn-outline-success  " href="{{route('student.create')}}"> Add New</a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Major</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($students as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->major }}</td>
                                    <td>{{ $item->mobile }}</td>

                                    <td>
                                        <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-primary btn-sm"> <i class="fa-regular fa-eye"></i> View</button></a>
                                        <a href="{{ url('/student/' . $item->id) . '/edit'}}" title="Edit Student"><button class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i> Edit</button></a>

                                        <form action="{{ route('student.destroy', $item->id )}}" method="post" accept-charset="UTF-8" style="display:inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><i class="fa-regular fa-circle-xmark"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $students->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
