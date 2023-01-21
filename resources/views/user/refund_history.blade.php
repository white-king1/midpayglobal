@extends('layouts.dashboard_layout')
@section('content')



<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>VIEW REFUND DETAILS</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">VIEW </li>
                        <li class="breadcrumb-item active">REFUND DETAILS</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid credit-card payment-details">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-xxl-8 box-col-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>TRANSACTION ID</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('refview') }}" method="post" class="theme-form mega-form">
                                    @csrf
                                    <div class="mb-3">
                                        <input class="form-control" name="transaction_id" type="text"
                                            placeholder="TYPE IN THE TRANSACTION ID">
                                    </div>


                                    <div class="col-12">

                                    <button class="btn btn-primary btn-block" >Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
            <!-- Debit Card Starts-->

            <!-- EMI Ends-->
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
    <!-- page-wrapper Start-->
    {{-- <div class="page-wrapper compact-wrapper" id="pageWrapper"> --}}
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
                        <h3>Your Refunds</h3>
                      </div>
                      <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                          <li class="breadcrumb-item">View Your</li>
                          <li class="breadcrumb-item active"> REFUNDS</li>
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
                      <h5>Refund history</h5>
                    </div>
                    <div class="card-body">
                      <div class="order-history table-responsive">
                        <table class="table table-bordernone display" id="basic-1">
                          <thead>
                            <tr>
                              <th scope="col">Name of Item</th>
                              <th scope="col">Cost Of Item/Items</th>
                              <th scope="col">Transaction Id</th>
                              <th scope="col">Date of Transaction</th>
                              <th scope="col">Quantity</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>IPHONE 14 PRO MAX</td>
                                <td>$2,121</td>
                              <td>1276834tyh</td>
                              <td>13/09/2022</td>
                              <td>1</td>
                              <td>
                                <a href="{{ route('refview') }}">

                                    <button class="btn btn-success" type="button">View</button>
                                </a>
                            </td>
                            </tr>


                            <tr>
                                <td>IPHONE 14 PRO MAX</td>
                                <td>$2,121</td>
                              <td>1276834tyh</td>
                              <td>13/09/2022</td>
                              <td>1</td>
                              <td>
                                <a href="{{ route('refview') }}">
                                    <button class="btn btn-success" type="button">View</button>
                                </a>
                            </td>
                            </tr>

                            <tr>
                                <td>IPHONE 14 PRO MAX</td>
                                <td>$2,121</td>
                              <td>1276834tyh</td>
                              <td>13/09/2022</td>
                              <td>1</td>
                              <td>
                                <a href="{{ route('refview') }}">
                                    <button class="btn btn-success" type="button">View</button>
                                </a>
                            </td>
                            </tr>

                            <tr>
                                <td>IPHONE 14 PRO MAX</td>
                                <td>$2,121</td>
                              <td>1276834tyh</td>
                              <td>13/09/2022</td>
                              <td>1</td>
                              <td>
                                <a href="{{ route('refview') }}">
                                    <button class="btn btn-success" type="button">View</button>
                                </a>
                            </td>
                            </tr>

                            <tr>
                                <td>IPHONE 14 PRO MAX</td>
                                <td>$2,121</td>
                              <td>1276834tyh</td>
                              <td>13/09/2022</td>
                              <td>1</td>
                              <td>
                                <a href="{{ route('refview') }}">
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
