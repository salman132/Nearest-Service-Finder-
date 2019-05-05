@extends('layouts.frontend')

@section('content')

    <div class="py-3">
        <div class="container">
            <div class=" text-center alert alert-danger" role="alert">
                You Must Fillup this Form !
            </div>

            <div class="form-area">
                <div class="col-md-12">
                    <div class="fraud-image">
                        <img src="{{asset('app/images/fraud.jpg')}}" alt="fraud alert">
                    </div>
                    <div class="fraud-text">
                        <div class="text-danger">
                            <h6><span>We can take disciplinary action against fraud information</span></h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12 col-sm-8">
                            <div class="py-5">
                                @include('includes.error')
                                <div class="card">
                                    <div class="card-header">
                                        Please Give The Neccessary Infomartion
                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('apartment.store')}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <select name="district" class="form-control">


                                                        <option value="{{$district->id}}">{{$district->name}}</option>


                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label><span>House No: </span></label>
                                                <input type="number" name="house"  placeholder="House No:" min="1" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Road No: <span class="text-danger">*</span></label>
                                                <input type="number" name="road"  placeholder="Road No:" min="1" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Flat No: <span class="text-danger">*</span></label>
                                                <input type="number" name="flat"  placeholder="Flat No:" min="1" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Thana <span class="text-danger"> *</span></label>
                                                <select name="thana" class="form-control">
                                                    @foreach($thanas as $thana)

                                                        <option value="{{$thana->id}}">{{$thana->thana}}</option>

                                                        @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Distance From Police Station</label>
                                                <input type="number" name="distance" class="form-control" placeholder="Distance From Police Station">
                                            </div>

                                            <div class="form-group">
                                                <label>Upload An image of the Appartment <span class="text-danger"> *</span></label>
                                                <input type="file" name="image">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Register" class="btn btn-primary">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-12 col-sm-4">
                            <div class="road-to-home">
                                <p >
                                    Road To Home , Take Me Home, <br>
                                    On the Place Where I belong
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop