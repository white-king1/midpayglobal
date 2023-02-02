@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>MAKE A DEPOSIT</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">DEPOSIT</li>
                            <li class="breadcrumb-item active">Direct Deposit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid credit-card payment-details">
            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-xxl-10 col-md-10 mx-auto box-col-10">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5> TOTAL AMOUNT</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="theme-form mega-form" action="{{ route('deposit.details') }}"
                                        method="post"> @csrf

                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label class="form-label"
                                                        for="exampleFormControlSelect9">CURRENCY</label>
                                                    <select class="form-select digits" name="currency"
                                                        id="exampleFormControlSelect9">
                                                        <option>NGN ₦</option>
                                                        <option>GHS ¢</option>
                                                        <option>GBP £</option>
                                                        <option>USD $</option>
                                                        <option>CAD $</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">AMOUNT</label>
                                            <input class="form-control" name="amount" type="text" placeholder="Amount"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">PASSWORD</label>
                                            <input class="form-control" name="password" type="text"
                                                placeholder="PASSWORD" required>
                                        </div>
                                        <div class="card-body">
                                            <center>
                                                <div class="card-footer text-end">
                                                    <button class="btn btn-primary">Deposit</button>
                                                    <input class="btn btn-light" type="reset" value="Cancel">
                                                </div>
                                            </center>
                                        </div>

                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                        {{-- required --}}
                                        <input type="hidden" name="callback_url" value="{{ route('deposit.callback') }}">

                                        {{-- <div class="col-12">
                                        <button class="btn btn-primary btn-block">DEPOSIT</button>
                                     </div> --}}
                                    </form>
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
    </div>
@endsection
