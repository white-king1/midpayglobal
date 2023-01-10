@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3> ACCEPT ORDER </h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">ID NUMBER</li>
                        <li class="breadcrumb-item active">ORDER VIEW</li>
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
                    <form  class="form theme-form" action="{{route('accept')}}">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <div class="container card card-body">
                                        <label class="form-label" for="exampleInputPassword27">Transaction Reference Number</label>
                                    <input class="form-control"   required name="reference"  id="exampleInputPassword27" type="text"
                                        placeholder="Type in the  'REFERENCE NUMBER' given to you by the Buyer">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                          <button class="btn btn-primary" type="submit">View</button>
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
