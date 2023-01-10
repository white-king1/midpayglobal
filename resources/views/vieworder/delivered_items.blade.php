
@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>ITEM/ITEMS DELIVERED DETAILS</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">ITEM/ITEMS</li>
                        <li class="breadcrumb-item active">DELIVERED </li>
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
                                        <label class="form-label" for="exampleInputPassword27">Item/Items Details</label>
                                    <h2>TRANSACTION ID:: K6W5Hh</h2>
                                    <br>
                                    <h2>ITEM/ITEMS DESCRIPTION:: IPHONE 14 PROMAX 512GIG</h2>
                                    <br>
                                    <h2>QUANTITY:: 20</h2>
                                    <br>
                                    <h2>COST OF ITEM:: $400</h2>
                                    <br>
                                    <h2>MIDPAY FEE:: $16</h2>
                                    <br>
                                    <h2>TOTAL COST OF ITEM/ITEMS:: $416</h2>
                                    <br>
                                    <h2>DATE OF TRANSACTION:: 14/09/2022</h2>
                                    <br>
                                    <div class="card-footer text-end">

                                        <a href="{{ route('congrats') }}">
                                            <button class="btn btn-primary" type="button">Accept</button>
                                        </a>
    
    
                                        <a href="{{route('decline')}}">
                                            <button class="btn btn-danger" type="button">Decline</button>
                                        </a>
    
    
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


