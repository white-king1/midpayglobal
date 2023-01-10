@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>Update My Profile</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Profile</li>
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
                        <h5> PROFILE DETAILS</h5>
                    </div>
                    <form class="form theme-form" action="{{ route('transaction.create') }}" method="post">
                        @csrf
                        <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">FULL NAME</label>
                                            <h2>{{ Auth::user()->name }}</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">EMAIL</label>
                                            <h2>{{ Auth::user()->email }}</h2>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">PHONE NUMBER</label>
                                            <h2>{{ Auth::user()->phone }}</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">VENDOR IDENTIFICATION NUMBER</label>
                                            <input class="form-control" name="vendorId" id="exampleInputPassword2"
                                                type="text" placeholder="89763452SWH">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">REFERRAL LINK</label>
                                            <input class="form-control" name="reflink" id="exampleInputPassword2"
                                                type="text" placeholder="https://midappay.com/2345Rq">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-end">

                                    <button class="btn btn-primary">UPDATE PROFILE</button>

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
