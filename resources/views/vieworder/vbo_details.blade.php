@extends('layouts.dashboard_layout')
@section('content')
    <!-- Mirrored from admin.pixelstrap.com/zeta/theme/order-history.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Mar 2022 19:44:24 GMT -->


    <!-- Google font-->


    <!-- tap on top starts-->

    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->

        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>BUYER ORDER DETAILS</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">BUYER ORDER</li>
                                <li class="breadcrumb-item active"> DETAILS</li>
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
                                <h5>Seller Order</h5>
                            </div>
                            <div class="card-body">
                                <div class="order-history table-responsive">
                                    <table class="table table-bordernone display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th scope="col">Transaction Id</th>
                                                <th scope="col">Item Description</th>
                                                <th scope="col">Qantity</th>
                                                <th scope="col">Transsction Period</th>
                                                <th scope="col">Deposit Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>7 Days</td>
                                                <td>$2,121</td>
                                                <td>
                                                    <a href="{{ route('order.details') }}">

                                                        <button class="btn btn-success" type="button">View</button>
                                                    </a>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>7 Days</td>
                                                <td>$2,121</td>
                                                <td>
                                                    <a href="{{ route('order.details') }}">

                                                        <button class="btn btn-success" type="button">View</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->
        </div>
        <!-- footer start-->

    </div>
    </div>
    <!-- latest jquery-->

    <!-- footer start-->

    </div>
@endsection
