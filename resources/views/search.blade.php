@extends('layouts.frontend')

@section('content')

    <div class="py-5">
        <div class="col-md-12">
            <div class="text-center">
                <h2>Find More Specific in <b>{{$district->name}}</b></h2>
            </div>
            <div class="card">
                <div class="card-header col-md-12">
                    Advance Searching
                </div>
                <div class="card-body col-md-12">
                    <form action="{{route('house.find',['id'=>$district->id])}}" method="get">
                        {{csrf_field()}}
                        <div class="row">
                            <!-- ....1st row ..... -->
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Thana</label>
                                    <select name="thana" class="form-control">
                                        @foreach($thanas as $thana)
                                            <option value="{{$thana->id}}">{{$thana->thana}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Distance From Thana</label>
                                    <select name="distance" class="form-control">
                                        @foreach($apartments as $distance)
                                            <option value="{{$distance->distance}}">{{$distance->distance}}</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <!-- .... 2nd row ends ... -->
                            <div class="col-md-12 col-sm-12 col-12 text-center">
                                <div class="form-group">
                                    <input type="submit" value="Search" class="btn btn-primary col-md-6 col-sm-12 col-12">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="py-5">
        <div class="col-md-12">
            <div class="text-center text-success">
                <h2><b>{{$apartments->count()}}</b> House Found In {{$district->name}}<b></b></h2>
            </div>


            @foreach($apartments as $apartment)

                <div class="py-4">
                    <div class="card">
                        <div class="card-header col-md-12">
                            <div class="time">
                                <b>{{$apartment->created_at->toFormattedDateString()}}, &nbsp; {{$apartment->created_at->diffForHumans()}}</b>
                            </div>

                        </div>
                        <div class="card-body result-sm">
                            <div class="row">
                                <div class="col-md-8 col-12 col-xs-12">
                                    <h3> <i class="fas fa-home">{{$apartment->district->name}}</i> </h3>
                                    <p><i class="fas fa-address-card"></i> House {{$apartment->house}}, Road No: {{$apartment->road_no}}</p>
                                    <h6><i class="fas fa-phone"></i> {{$apartment->user->profile->phone}}</h6>
                                    <div class="py-2">
                                        <div uk-lightbox>
                                            <a href="{{'/uploads/apartments/'.$apartment->image}}"><img src="{{'/uploads/apartments/'.$apartment->image}}" alt="house" height="200px" width="200px" class="img-fluid"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 col-xs-12 text-right">
                                    @if($apartment->is_being_followed_by_auth())

                                        <a href="{{route('remove.request',['id'=>$apartment->id])}}" class="btn btn-danger">Remove Request</a>
                                    @else
                                        <a href="{{route('send.request',['id'=>$apartment->id])}}" class="btn btn-primary">Send Request</a>

                                    @endif
                                </div>

                            </div>
                        </div>

                        <div class="card-footer">
                            Owned By <a href="#">{{$apartment->user->name}}</a>
                        </div>
                    </div>

                </div>
                <div class="shortline">
                    <hr>
                </div>

            @endforeach


        </div>
    </div>


@stop