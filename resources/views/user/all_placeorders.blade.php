@extends('layouts.admin_dashboard_layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">ALL PLACED ORDERS </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">ALL</a></li>
            <li class="breadcrumb-item active" aria-current="page">PLACED ORDERS TABLE</li>
          </ol>
        </nav>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">PLACED ORDERS TABLE</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                      <th>Transaction Id</th>
                      <th>Description</th>
                      <th>Amount To Be Paid</th>
                       <th>Charges</th>
                       <th>Total Amount</th>
                       <th>Status</th>
                      <th>Date Registered</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ( $all_placeorders  as $place )
                   <tr>
                    <td>{{$place->user->name}}</td>
                    <td>{{$place->user->email}}</td>
                    <td>{{$place->user->phone}}</td>
                    <td>{{$place->transaction_id}}</td>
                    <td>{{$place->description}}</td>
                    <td>N{{number_format($place->deposit)}}</td>
                    <td>N{{number_format($place->charges)}}</td>
                    <td>N{{number_format($place->total)}}</td>
                    <td>{{$place->status}}</td>
                    <td>{{$place->created_at}}</td>
                  </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span>
        <span class="text-muted float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
@endsection
