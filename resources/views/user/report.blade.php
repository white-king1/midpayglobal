@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Report A transaction</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Report</li>
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
                            <h5>Please Kindly fill in the Report Details below</h5>
                        </div>
                        <form class="form theme-form" action="{{ route('reptcong') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">TRANSACTION ID(click here to get your<a href="{{ route('user.dashboard') }} "> transaction id</a>)</label>
                                            <input class="form-control" name="transaction id" id="exampleInputPassword2"
                                                type="text" placeholder="type in your transaction id">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea4">Reason For
                                                Report</label>
                                            <textarea class="form-control" name="reportreason" id="exampleFormControlTextarea4" type="text"
                                                placeholder="Reason For A Report" rows="3"></textarea>
                                        </div>
                                    </div>


                                    <div class="card-footer text-end">
                                             <a href="{{ route('reptcong') }}">  <button class="btn btn-primary">Report</button></a>
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
