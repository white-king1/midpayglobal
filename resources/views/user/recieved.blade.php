@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>USER PASSWORD </h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">USER</li>
                            <li class="breadcrumb-item active">PASSWORD</li>
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
                            <h5>PASSWORD</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('seller.pay') }}" method="post" class="theme-form mega-form">
                                        @csrf
                                        <div class="mb-3">
                                            <input class="form-control" name="password" type="text"
                                                placeholder="TYPE IN YOUR PASSWORD">
                                        </div>


                                        <div class="col-12">

                                          <a href="{{ route('seller.pay') }}">  <button class="btn btn-primary btn-block" type="button">Submit</button></a>
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
