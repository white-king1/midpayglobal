@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>RECIEVER'S FORM</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Pay/Refund</li>
                            <li class="breadcrumb-item active">Satified or Not</li>
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
                            <h5>RECIEVED</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">





                                <div class="mb-3">
                                    <div class="form-check">
                                        <div class="checkbox p5">
                                            <input class="form-check-input" id="invalidCheck1" type="checkbox"
                                                required="">
                                            <label class="form-check-label" for="invalidCheck1">I'M SATIFIED WITH THE ITEMS
                                                I RECEIVED,
                                                PLEASE KINDLY CREDIT THE SELLER.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <div class="checkbox p4">
                                            <input class="form-check-input" id="invalidCheck2" type="checkbox">
                                            <label class="form-check-label" for="invalidCheck2">I'M NOT SATIFIED WITH THE
                                                ITEMS I RECEIVED,
                                                PLEASE I KINDLY NEED A REFUND.</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-end">

                                    <a href="{{ route('completed') }}">
                                        <button class="btn btn-primary" type="button">Pay Seller</button>
                                    </a>


                                    <a href="{{route('refund.view')}}">
                                        <button class="btn btn-primary" type="button">Refund Me</button>
                                    </a>


                                </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
