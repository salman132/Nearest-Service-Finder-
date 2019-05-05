@extends('layouts.frontend')


@section('content')

    <div class="conatiner">


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


                                    <a href="{{route('apartment.remove',['id'=>$apartment->id])}}" class="btn btn-danger">Remove </a>

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


    </div>

    @endsection