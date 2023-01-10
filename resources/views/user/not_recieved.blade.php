@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>NOT AVAILABLE</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">WITHDRAWAL</li>
                        <li class="breadcrumb-item active">IN PROGRESS</li>
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
                        <h5> CASH WITHDRAWAL IS NOT AVAILABLE, <br>
                        PLEASE KINDLY INPUT, THIS PARTICULAR TRANSACTION REFERENCE NUMBER
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form class="theme-form mega-form">
                                    <div class="mb-3">
                                        <input class="form-control" type="text" placeholder="REFERENCE NUMBER">
                                    </div>
                                    <div class="col-12">
                                        <a href="{{route('progress')}}">
                                            <button class="btn btn-primary btn-block" type="button" title="">SUBMIT</button>
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
