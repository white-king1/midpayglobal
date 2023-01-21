@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>REPORT SUCCESSFULLY SUBMITED</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">REPORT</li>
                        <li class="breadcrumb-item active">QUERY</li>
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
                                        <label class="form-label" for="exampleInputPassword27">REPORT SENT</label>
                                    <h2>CONGRATULATIONS, YOUR REPORT HAS BEEN RECIEVED AND WILL BE HANDLED ACCORDINGLY</h2>
                                     <h3>KINDLY CHART US UP  <a href="https://wa.me/2349097763224?">HERE</a> FOR A SWIFT RESPONSE.</h3>
                                     <h4>(NOTE: WE WILL CONTACT YOU VIA EMAIL/PHONE CALL),</h4> <br>
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
