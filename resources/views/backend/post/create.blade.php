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
                   <form action="/post" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title"> Title <span class="text-danger">*</span></label>
                        <input id="title" class="form-control" type="text" name="title" placeholder="Enter Post Title">
                    </div>

                    <div class="form-group">
                        <label for="description">Description<span class="text-danger">*</span></label>
                        <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Upload Image (Optional)</label>
                                <input id="image" class="form-control" type="file" name="image" placeholder="" accept="image/jpg, image/png, image/jpeg">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success"> Add Post</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
