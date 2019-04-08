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
                            <div class="col-md-12 col-sm-9 col-12">
                                <div class="form-group">
                                    <label>Thana</label>
                                    <select name="thana" class="form-control">
                                        @foreach($thanas as $thana)
                                            <option value="{{$thana->id}}">{{$thana->thana}}</option>

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


@stop