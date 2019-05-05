@extends('adminlte::page')


@section('title','Admin Dashboard')


@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <div class="container">
        <div class="py-5" style="padding-top: 50px;">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center text-success">
                            <div class="panel-heading">
                                Number Of Users
                            </div>
                            <div class="panel-body text-center">
                                <div class="text-success">
                                    <h2>{{$users->count()}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center text-success">
                            <div class="panel-heading">
                                Number Of Hosts
                            </div>
                            <div class="panel-body text-center">
                                <div class="text-success">
                                    <h2>{{$hosts->count()}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center text-success">
                            <div class="panel-heading">
                                Number Of Consumer
                            </div>
                            <div class="panel-body text-center">
                                <div class="text-success">
                                    <h2>{{$us->count()}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="panel panel-default text-center text-success">
                            <div class="panel-heading">
                                Number Of Apartments
                            </div>
                            <div class="panel-body text-center">
                                <div class="text-success">
                                    <h2>{{$apartments->count()}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            </div>
        </div>
    </div>
@stop

