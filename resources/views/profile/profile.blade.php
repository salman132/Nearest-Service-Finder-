@extends('layouts.frontend')

@section('content')
    @if(Auth::user()->completed)

        <div class="py-5">
            <div class="text-success text-center">
                <h5>You Completed Your Profile Already</h5>
                <a href="{{route('home')}}">Return to Dashboard</a>
            </div>
        </div>

        @else

        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-10 col-sm-7">
                        @include('includes.error')
                        <div class="card">
                            <div class="card-header">
                                Please Complete Your Profile
                            </div>
                            <div class="card-body">
                                <form action="{{route('profile.complete')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Become A: <span class="text-danger">*</span></label>
                                        <select name="role" class="form-control">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" name="phone" placeholder="Phone Number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Your Image <span class="text-danger">*</span></label>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

        @endif




    @stop