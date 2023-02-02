@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3> REFUND DETAILS</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Refund</li>
                            <li class="breadcrumb-item active">Details</li>
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
                        <form class="form theme-form">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="container card card-body">
                                            <label class="form-label" for="exampleInputPassword27">Refund Successfully
                                                Initiated</label>
                                            <div class="container card card-body">

                                                <h4>@auth
                                                        HERE IS YOUR REFUND IDENTIFICATION NUMBER: {{ $refund->refund_id }}.
                                                    @endauth
                                                </h4>

                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="exampleInputPassword2">REASON FOR
                                                            REFUND</label>
                                                        <div class="container card card-body">
                                                            <h4>{{ $refund->reason }}.</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>NOTE: <br>
                                                FOR A SWIFT RESPONSE TO YOUR REFUND,KINDLY CLICK ON THE LIVE CHART.
                                            </p>
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
