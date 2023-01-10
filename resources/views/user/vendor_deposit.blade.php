@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>VENDOR DEPOSIT</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Deposit</li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts here-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>MAKE A YEARLY DEPOSIT OF NGN5,000 TO OBTAIN A UNIQUE VENDOR ID FOR DELIVERY</h5>
                        </div>
                        <form class="form theme-form" action="{{route('user.subscribe' , $plan)}}"  enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">


                                <div class="row">



                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword2">Name</label>
                                                <input class="form-control" name="name" value="{{$plan->name}}"   id="exampleInputPassword2"
                                                     readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword2">Amount</label>
                                                <input class="form-control" name="amount"  value="NGN{{number_format($plan->amount) }}"   id="exampleInputPassword2" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword2">Duration</label>
                                                <input class="form-control" name="duration"     value="{{$plan->Duration}} days"    id="exampleInputPassword2"
                                                      readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Subscribe</button>
                                        <input class="btn btn-light" type="reset" value="Cancel">
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
