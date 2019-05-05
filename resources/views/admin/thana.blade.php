@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@stop
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
        toastr.success('{{Session::get('success')}} ')
        @endif
    </script>
@stop


@section('title','Add City')


@section('content_header')
    <h1>Add District</h1>
@stop

@section('content')

    <div class="py-5" style="padding-top: 50px;">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add City
                                @include('includes.error')
                            </div>
                            <div class="panel-body">
                                <form action="{{route('thana.store')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>District <span class="text-danger">*</span></label>
                                        <select name="city_id" class="form-control">
                                            @foreach($districts as $district)
                                                <option value="{{$district->id}}">{{$district->name}}</option>

                                                @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Thana <span class="text-danger">*</span></label>
                                        <input type="text" name="thana"  class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Store" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Total : <b>{{$thanas->count()}}</b> </div>

                            <!-- Table -->
                            <table class="table table-responsive table-hover">
                                <thead>
                                <tr>
                                    <th>Thana</th>
                                    <th>District</th>
                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($thanas as $thana)

                                    <tr>
                                        <td>{{$thana->thana}}</td>
                                        <td>{{$thana->district->name}}</td>
                                        <td><a href="#" class="btn btn-info">Edit</a></td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
