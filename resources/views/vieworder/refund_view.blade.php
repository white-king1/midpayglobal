
@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>REFUND ITEM DETAILS</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">REFUND</li>
                        <li class="breadcrumb-item active">DETAILS</li>
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
                                        <label class="form-label" for="exampleInputPassword27">Refund Item Details</label>
                                    <h2> NAME OF ITEM:: IPHONE 14 PROMAX 512GIG </h2>
                                    <br>
                                    <h2> QUANTITY:: 20</h2>
                                    <br>
                                    <h2> COST OF ITEM:: $400</h2>
                                    <br>
                                    <h2> TRANSACTION ID:: K6W5Hh</h2>
                                    <br>
                                    <h2> DATE OF TRANSACTION:: 14/09/2022</h2>
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


