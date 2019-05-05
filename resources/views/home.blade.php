@extends('layouts.frontend')

@section('content')

    <div class="py-3">
        <div class="container">


            <div class="py-5">
                <div class="text-center">
                    <h3>{{$role->name}} Portal: {{Auth::user()->name}}</h3>
                    <div class="py-3">
                        @if($role->id==2)

                            <div class="alert alert-success" role="alert">
                                <b><i class="fas fa-lightbulb"></i> To Get An Order</b>  You have to fill up The <b>Rent House Form</b>
                            </div>

                            @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- ...colum 1 ... -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            My Profile
                        </div>
                        <div class="card-body">
                            <div class="portal-icon">
                                <i class="fas fa-user-tie"></i>
                                <h4>Update Your Profile</h4>
                                <a href="{{route('profile.edit')}}" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ...colum 2 ... -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Change Password
                        </div>
                        <div class="card-body">
                            <div class="portal-icon">
                                <i class="fas fa-key"></i>
                                <h4>Accounts Security</h4>
                                <a href="#" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ...colum 2 ... -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Order Status
                        </div>
                        <div class="card-body">
                            <div class="portal-icon">
                                <i class="fas fa-sort-amount-up"></i>

                                <h4>Check Current Status</h4>
                                @if(Auth::user()->profile->role_id ==2)
                                <a href="{{route('order.page')}}" class="btn btn-primary">View Details</a>
                                    @else
                                    <a href="{{route('user.order')}}" class="btn btn-primary">View Details</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>



                <!-- ... 2nd pannel row ... -->
                <div class="py-3">
                    <div class="container">

                        <div class="row">
                            <!-- ...colum 1 ... -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        Pending Approval
                                    </div>
                                    <div class="card-body">
                                        <div class="portal-icon">
                                            <i class="fas fa-spinner"></i>
                                            <h4>Sent Requests</h4>
                                            <a href="#" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ...colum 2 ... -->
                            @if($role->id ==2)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        Total Earning
                                    </div>
                                    <div class="card-body">
                                        <div class="portal-icon">
                                            <i class="fas fa-money-check-alt"></i>
                                            <h4>Earnings</h4>
                                            <a href="#" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            Rent House
                                        </div>
                                        <div class="card-body">
                                            <div class="portal-icon">
                                                <i class="fas fa-home"></i>
                                                <h4>Rent House</h4>
                                                <a href="{{route('apartment.fill')}}" class="btn btn-primary">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else

                                @endif



                        </div>
                    </div>
                </div>


        </div>

    </div>


@endsection


