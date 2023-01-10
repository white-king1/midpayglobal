@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3> REFUND ID NUMBER</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Refund</li>
                        <li class="breadcrumb-item active">Identification Number</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <form  class="form theme-form" action="">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <div class="container card card-body">
                                        <label class="form-label" for="exampleInputPassword27">Refund Successfully Initiated</label>
                                    <h2>HERE IS YOUR REFUND IDENTIFICATION NUMBER: {{ $refundid}}. <br></h2>
                                    <p><br>KINDLY NOTE: <br>
                                         THE ABOVE REFUND IDENTIFICATION NUMBER WILL BE REQUIRED OF YOU AT ANY DELIVERY POINT, <br>
                                        AND RETURNING OF ANY ITEM/ITEMS IS FREE WITH YOUR REFUND ID NUMBER. <br></p>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection
