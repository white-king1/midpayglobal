@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Refund</h3>
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
        <!-- Container-fluid starts here-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Please Kindly fill in the Details below to Initiate a Refund (Note:Refund Takes 3-21 days)</h5>
                        </div>
                        <form class="form theme-form" action="{{ route('reforder') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">TRANSACTION ID(click here to get your<a href="{{ route('user.dashboard') }} "> transaction id</a>)</label>
                                            <input class="form-control" name="transaction id" id="exampleInputPassword2"
                                                type="text" placeholder="type in your transaction id" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea4">Reason For
                                                Refund</label>
                                                <input class="form-control" name="reason" id="exampleInputPassword2"
                                                type="text" placeholder="type in your reason" required>
                                        </div>
                                    </div>


                                    <div class="card-footer text-end">
                                               <button class="btn btn-primary">Refund</button>
                                        <input class="btn btn-light" type="reset" value="Cancel">
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
