@extends('layouts.frontend')

@section('content')

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-10 col-sm-7">
                        @include('includes.error')
                        <div class="card">
                            <div class="card-header">
                               Update Your Profile
                            </div>
                            <div class="card-body">
                                <form action="{{route('profile.update',['id'=>$user->profile->id])}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" placeholder="Phone Number" class="form-control" value="{{$user->profile->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Your Image <span class="text-danger">*</span></label>
                                        <input type="file" name="image">
                                        <div class="py-3">
                                            <div uk-lightbox>
                                                <a href="{{'/uploads/profile/'.$user->profile->image}}"><img src="{{'/uploads/profile/'.$user->profile->image}}" alt="house" height="200px" width="200px" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>





@stop