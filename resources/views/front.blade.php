@extends('layouts.frontend')



@section('content')


    <!-- .. banner content starts ... -->
    <div class="banner-content">
        <div class="py-5">
            <div class="container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h2>Search Your Desired Place</h2>
                                </div>
                                <div class="card-body">
                                    <div class="form-area">
                                        <form action="{{route('select.district')}}" method="get">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>District </label>
                                                <select name="district" class="form-control" onchange='this.form.submit()'>
                                                    <option value="1">Select Your District</option>
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
            </div>
        </div>
    </div>



<div class="middle-area py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Discover Us</h2>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-success">Restaurants</div>
                            </div>
                            <div class="card-body">
                                <a href="#"><img src="{{asset('app/images/house.jpg')}}" alt="house"  class="img-fluid col-md-12"></a>
                            </div>
                            <div class="card-footer">
                                Find Your nearest restaurants
                            </div>
                        </div>
                    </div>
                    <!-- .. tourist place ... -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-success">Tourist Place</div>
                            </div>
                            <div class="card-body">
                                <a href="#"><img src="{{asset('app/images/cox.jpg')}}" alt="house"  class="img-fluid col-md-12"></a>
                            </div>
                            <div class="card-footer">
                                Find Houses Near Tourist Place
                            </div>
                        </div>
                    </div>
                    <!-- ... nearest hospital  ..... -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-success">Hospital</div>
                            </div>
                            <div class="card-body">
                                <a href="#"><img src="{{asset('app/images/hospital.jpg')}}" alt="house"  class="img-fluid col-md-12"></a>
                            </div>
                            <div class="card-footer">
                                In case of emergency you may need it
                            </div>
                        </div>
                    </div>


                    <!-- .... police station ... -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-success">Police Station</div>
                            </div>
                            <div class="card-body">
                                <a href="#"><img src="{{asset('app/images/police.jpg')}}" alt="house"  class="img-fluid col-md-12"></a>
                            </div>
                            <div class="card-footer">
                                In case of emergency you may need it
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... CONTACT US SECTION ...  -->
<div class="contact-us">
    <div class="container">
        <div class="col-dm-12">
            <h2>Let's Introduce yourself</h2>


            <div class="banner-area">
                <div class="text-area text-center">
                    <a href="#" class="btn btn-danger">Contact Us <span style="color:#FFFFFF;"><i class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ... HOST AREA ..... -->

<div class="host-area">
    <div class="container">
        <div class="text-center random">
            <h2>Host Your House To Us</h2>
        </div>
        <div class="host-image col-md-12">
            <div class="row">
                <!-- .... row 1 ... -->
                <div class="col-md-4 col-sm-6 col-12 text-center text-success">
                    <div class="card bg-dark">
                        <div class="card-header">
                            HOSTS
                        </div>
                        <div class="card-body bg-dark">
                            <div class="text-center"><div class="text-success"><h2>500</h2></div></div>
                        </div>
                        <div class="card-footer">
                            #Houses
                        </div>
                    </div>
                </div>
                <!-- .... row 2 ... -->
                <div class="col-md-4 col-sm-6 col-12 text-center text-success">
                    <div class="card bg-dark">
                        <div class="card-header">
                            USERS
                        </div>
                        <div class="card-body bg-dark">
                            <div class="text-center"><div class="text-success"><h2>500</h2></div></div>
                        </div>
                        <div class="card-footer">
                            #Users
                        </div>
                    </div>
                </div>
                <!-- .... row 1 ... -->
                <div class="col-md-4 col-sm-6 col-12 text-center text-success">
                    <div class="card bg-dark">
                        <div class="card-header">
                            ACTIVE ORDER
                        </div>
                        <div class="card-body bg-dark">
                            <div class="text-center"><div class="text-success"><h2>500</h2></div></div>
                        </div>
                        <div class="card-footer">
                            #Order
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @stop




