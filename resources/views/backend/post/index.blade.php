@extends('backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span class="fw-bold fs-3">Posts</span>

                <a href="/post/create" class="float-right btn btn-success">Add Post</a>

                    @foreach ($posts as $post)
                        
                    @endforeach
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
