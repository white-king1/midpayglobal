@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3> TRANSACTION COMPLETED</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">SUCCESSFULL</li>
                        <li class="breadcrumb-item active">TRANSACTION</li>
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
                                        <label class="form-label" for="exampleInputPassword27">Transaction Successfully Completed</label>
                                    <h2>CONGRATULATIONS,YOUR TRANSACTION IS SUCCESSFULLY COMPLETED. <br></h2>
                                    <p><br>KINDLY INFORM THE SELLER TO WITHDRAW AND GET PAID AS SOON AS POSSIBLE. <br></p>


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
