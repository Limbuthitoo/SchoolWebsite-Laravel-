@extends('backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span class="fw-bold fs-3">Posts</span>

                <a href="/post/create" class="float-right btn btn-success">Add Post</a>


                </div>
                <div class="card-body">

                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-lg-3">
                            <div class="card card-hover">
                                <div class="card-body">
                                    <img src="{{$post->image}}" class="img-fluid" alt="">
                                </div>
                                <div class="card-footer">
                                    <h4>{{$post->title}}</h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
