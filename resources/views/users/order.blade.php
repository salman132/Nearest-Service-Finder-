@extends('layouts.frontend')

@section('content')



    <div class="container">
        <div class="py-5">
            <div class="text-center">
                @if($orders->count()>0)

                    <div class="text-success">
                        <h3>You Have {{$orders->count()}} Active Order</h3>
                    </div>

                @else
                    <div class="text-danger">
                        <h3>You Have {{$orders->count()}} Active Order Requests</h3>
                    </div>


                @endif
            </div>
        </div>
        @foreach($orders as $order)

            <div class="py-4">
                <div class="card">
                    <div class="card-header">
                        <div class="time">
                            <b>{{$order->created_at->toFormattedDateString()}}, &nbsp; {{$order->created_at->diffForHumans()}}</b>
                        </div>

                    </div>
                    <div class="card-body result-sm">
                        <div class="row">
                            <div class="col-md-8 col-12 col-xs-12">
                                <h3> <i class="fas fa-home">{{$order->apartment->district->name}}</i> </h3>
                                <p><i class="fas fa-address-card"></i> House {{$order->apartment->house}}, Road No: {{$order->apartment->road_no}} </p>
                                <h6><i class="fas fa-phone"></i> {{$order->apartment->user->profile->phone}}</h6>
                                <div class="py-2">
                                    <div uk-lightbox>
                                        <a href="{{'/uploads/apartments/'.$order->apartment->image}}"><img src="{{'/uploads/apartments/'.$order->apartment->image}}" alt="house" height="200px" width="200px" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 col-xs-12 text-right">
                                @if($order->accepted)

                                    <a href="" class="btn btn-primary">Mark As Done</a>
                                @else

                                @endif

                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        Owner   <a href="#">{{$order->apartment->user->name}}</a>
                    </div>
                </div>

            </div>
            <div class="shortline">
                <hr>
            </div>


        @endforeach
    </div>



@stop