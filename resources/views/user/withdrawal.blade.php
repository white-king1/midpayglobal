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
                        <h5> ACCOUNT DETAILS</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form class="theme-form mega-form">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="ACCOUNT HOLDER NAME">
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="ACCOUNT NUMBER">
                                    </div>

                                    <div class="mb-3 ">
                                        <select class="form-select" size="1">
                                            <option>Select Bank</option>
                                            <option>SBI</option>
                                            <option>ICICI</option>
                                            <option>KOTAK</option>
                                            <option>BOB</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="Amount">
                                    </div>

                                    <div class="col-12">
                                        
                                        <a href="{{route('thanks')}}">
                                            <button class="btn btn-primary btn-block" type="button" title="">WITHDRAW</button>
                                        </a>
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