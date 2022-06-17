@extends('backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span class="fw-bold fs-3">Post</span>
                <a href="/post" class="float-right btn btn-success">Back</a>
                </div>
                <div class="card-body">
                   <form action="/post/{{$post->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="title"> Title <span class="text-danger">*</span></label>
                        <input id="title" class="form-control" type="text" name="title" placeholder="Enter Post Title" value="{{$post->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description<span class="text-danger">*</span></label>
                        <textarea id="description" class="form-control" name="description" rows="3" value={!! $post->description !!} ></textarea>
                    </div>

<div>
    <img src="{{asset($post->image)}}" alt="" width="10 0">
</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Upload Image (Optional)</label>
                                <input id="image" class="form-control" type="file" name="image" placeholder="" accept="image/jpg, image/png, image/jpeg">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success"> Update Post</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
