@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>ORDER SUCCESSFULLY ACCEPTED</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">SUCCESSFUL</li>
                        <li class="breadcrumb-item active">ORDER </li>
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
                                        <label class="form-label" for="exampleInputPassword27">Order Successfully Accepted</label>
                                    <h2>CONGRATULATIONS, YOU HAVE SUCCESSFULLY ACCEPTED AN ORDER,</h2> <br>
                                     <h4>YOU CAN WITHDRAW AS SOON AS THE ITEM IS DELIVERED.</h4>  
                                    
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
