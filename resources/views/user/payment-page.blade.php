@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>PAYMENT SUMMARY</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Order Form</li>
                        <li class="breadcrumb-item active">Product Input</li>
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
                    <div class="card-header pb-0">
                        <h5>Product Payment Summary</h5>
                    </div>
                    <form class="form theme-form">
                        <div class="card-body">


                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea4">Reference
                                            </label>
                                        <div class="container card card-body">
                                            <h4>{{$transaction->reference}}</h4>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea4">PRODUCT
                                            DISCRITPTION</label>
                                        <div class="container card card-body">
                                            <h4>{{$transaction->description}}</h4>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">QUANTITY</label>
                                            <div class="container card card-body">
                                                <h4>{{$transaction->quantity}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header pb-0">
                                    <h5>DELIVERY OPTIONS</h5>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <div class="checkbox p-0">
                                                <input class="form-check-input" id="invalidCheck2" type="checkbox"
                                                    required="">
                                                <label class="form-check-label" for="invalidCheck2">PICKUP POINT IN PERSON
                                                    conditions</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <div class="checkbox p5">
                                                <input class="form-check-input" id="invalidCheck2" type="checkbox"
                                                    required="">
                                                <label class="form-check-label" for="invalidCheck2">HOME DELIVERY
                                                    conditions</label>
                                            </div>
                                        </div>
                                    </div>



                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">CURRENCY</label>
                                            <div class="container card card-body">
                                                <h4>{{$transaction->currency}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">TOTAL COST(Includes
                                                cost of Delivery & Product)</label>
                                            <div class="container card card-body">
                                                
                                                <h4>{{$transaction->totalcost}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <div class="checkbox p5">
                                            <input class="form-check-input" id="invalidCheck1" type="checkbox"
                                                required="">
                                            <label class="form-check-label" for="invalidCheck1">  <a href="{{route('privacy')}}"> Agree To Terms And Conditions </a></label>
                                        </div>
                                    </div>
                                </div>



                                <div class="card-footer text-end">

                                    <a href="">
                                        <button class="btn btn-primary" type="button">Make payment</button>
                                    </a>

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
