@extends('backend.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <span class="fw-bold fs-3">General Setting</span>
                <a href="/school" class="float-end btn-shadow">Back</a>
                </div>
                <div class="card-body">
                   <form action="/school/{{$school->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">School Name <span class="text-danger">*</span></label>
                        <input id="name" class="form-control" type="text" name="name" placeholder="Enter your school name" value="{{$school->name}}">
                    </div>

                    <div class="form-group">
                        <label for="address">Address <span class="text-danger">*</span></label>
                        <input id="address" class="form-control" type="text" name="address" placeholder="Enter your school address"value="{{$school->address}}">
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" class="form-control" type="text" name="email" placeholder="eg: mail@school.edu.np" value="{{$school->email}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact">Contact <span class="text-danger">*</span></label>
                                <input id="contact" class="form-control" type="text" name="contact" placeholder="eg: 9805014521" value="{{$school->contact}}">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook">Official Facebook (Optional)</label>
                                <input id="facebook" class="form-control" type="text" name="facebook" placeholder=""value="{{$school->facebook}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram">Official Instagram (Optional)</label>
                                <input id="instagram" class="form-control" type="text" name="instagram" placeholder=""value="{{$school->instagram}}">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="twitter">Official Twitter (Optional)</label>
                                <input id="twitter" class="form-control" type="text" name="twitter" placeholder=""value="{{$school->twitter}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="linkedin">Official Linkedin (Optional)</label>
                                <input id="linkedin" class="form-control" type="text" name="linkedin" placeholder="" value="{{$school->linkedin}}">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="skype">Official Skype (Optional)</label>
                                <input id="skype" class="form-control" type="text" name="skype" placeholder="" value="{{$school->skype}}">
                            </div>
                        </div>
                    </div>

                    <div class="my-2">
                        <img src="{{asset($school->logo)}}" alt="" class="img-fluid" width="150">
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="logo">Upload Logo (Optional)</label>
                                <input id="logo" class="form-control" type="file" name="logo" placeholder="" accept="image/jpg, image/png, image/jpeg">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-success">Update Record</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
