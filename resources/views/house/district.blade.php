@extends('layouts.frontend')


@section('content')


        <div class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-10 col-sm-10">
                        <div class="card">
                            <div class="card-header">
                                Choose District
                            </div>
                            <div class="card-body">
                                <form action="{{route('location.find')}}" method="GET">


                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <select name="district" class="form-control" onchange='this.form.submit()'>
                                            <option value="1">Select Your District</option>disabled
                                            @foreach($districts as $district)

                                                <option value="{{$district->id}}">{{$district->name}}</option>

                                            @endforeach
                                        </select>
                                        <script><input type="submit" value="Submit"> </script>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @stop