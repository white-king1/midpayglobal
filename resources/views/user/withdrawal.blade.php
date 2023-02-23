@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Withdrawal Details</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">WITHDRAW</li>
                        <li class="breadcrumb-item active">Withdrawal Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
     @if (Session::has('flash_message'))
        <center>
        <div class="alert {{ Session::get('flash_type') }} col-md-4">
           <h6>{{ Session::get('flash_message') }}</h6>
        </div>
        </center>
        @endif
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
                                <form action="{{ route('buyer') }}" method="post" class="theme-form mega-form">
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control" name="transaction" type="text"
                                            placeholder="TYPE IN THE TRANSACTION ID">
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
    <!-- Container-fluid starts-->
    <div class="container-fluid credit-card payment-details">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-xxl-8 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5> ACCOUNT DETAILS (CLICK <a href="https://wa.me/2349097763224?">HERE </a>TO CHART WITH US)</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form class="theme-form mega-form" action="{{ route('withdrawal.details') }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control" type="text"  name="account_name" placeholder="ACCOUNT HOLDER NAME"  required>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="text"   name="account_number" placeholder="ACCOUNT NUMBER"  required>
                                    </div>

                                    <div class="mb-3 ">
                                        <select class="form-select" size="1"  name="bank">
                                            <option>Select Bank</option>
                                            <option>SBI</option>
                                            <option>ICICI</option>
                                            <option>KOTAK</option>
                                            <option>BOB</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <input class="form-control" type="text"   name="amount" placeholder="Amount" required>
                                    </div>

                                        <p> NOTE: (FOR EVERY WITHDRAWAL A CHARGE OF "N100" IS DEDUCTED)<p>

                                    <div class="col-12">
                                 <button class="btn btn-primary btn-block" title="">WITHDRAW</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-5 text-center"><img class="img-fluid"
                                    src="../user_assets/images/ecommerce/with.jpg" alt=""></div>
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
