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
                                <form class="theme-form mega-form" action="{{route('deposit.confirm')}}" method="post" > @csrf

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

                                    <div class="mb-3" >
                                        <label class="form-label"
                                        for="exampleFormControlSelect9">AMOUNT</label>
                                        <input class="form-control" name="amount" type="text" placeholder="Amount">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label"
                                        for="exampleFormControlSelect9">PASSWORD</label>
                                        <input class="form-control" name="password"  type="text" placeholder="PASSWORD">
                                    </div>


                                        <div class="card-body">
                                            <center>
                                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                                    <div class="row" style="margin-bottom:40px;">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <p>

                                                            </p>
                                                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                                            <input type="hidden" name="orderID" value="345">
                                                            <input type="hidden" name="amount" value="800000"> {{-- required in kobo --}}
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="currency" value="NGN">
                                                            <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}


                                                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                                            <p>
                                                                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                                     DEPOSIT
                                                                </button>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </center>
                                        </div>


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
@endsection
