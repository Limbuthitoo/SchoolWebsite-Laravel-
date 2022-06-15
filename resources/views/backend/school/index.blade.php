@extends('backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span class="fw-bold fs-3">General Setting</span>
                @if (empty($school))
                <a href="/school/create" class="float-right btn btn-success">Add School Details</a>
                @endif

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">School Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">contact</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($school))
                            <td>{{$school ->name}}</td>
                            <td>{{$school ->address}}</td>
                            <td>{{$school ->contact}}</td>
                            <td>{{$school ->email}}</td>
                            <th>
<form action="/school/{{$school->id}}" method="post">
@csrf
@method('delete')
    <a href="/school/{{$school->id}}/edit" class="btn btn-success">Edit</a>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

                            </th>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
