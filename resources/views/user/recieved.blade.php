@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>RECIEVED </h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">RECIEVED</li>
                            <li class="breadcrumb-item active">APPROVAL</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid credit-card payment-details">
            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-xxl-8 box-col-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>TRANSACTION ID</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('recieved.details') }}" method="post" class="theme-form mega-form">
                                        @csrf
                                        <div class="mb-3">
                                            <input class="form-control" name="password" type="text"
                                                placeholder="TYPE IN THE TRANSACTION ID ">
                                        </div>


                                        <div class="col-12">

                                            <button class="btn btn-primary btn-block" >Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Individual column searching (text inputs) Ends-->
                <!-- Debit Card Starts-->

                <!-- EMI Ends-->
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
