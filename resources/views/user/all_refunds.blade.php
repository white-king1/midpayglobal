@extends('layouts.admin_dashboard_layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">ALL REFUNDS </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">ALL</a></li>
            <li class="breadcrumb-item active" aria-current="page">REFUNDS TABLE</li>
          </ol>
        </nav>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">REFUNDS TABLE</h4>
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
                      <th>Refund Id</th>
                      <th>Reason</th>
                      <th>Deposit</th>
                      <th>Date Registered</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($all_refunds as $refund )
                   <tr>
                    <td>{{$refund->user->name}}</td>
                    <td>{{$refund->user->email}}</td>
                    <td>{{$refund->user->phone}}</td>
                    <td>{{$refund->transaction_id}}</td>
                    <td>{{$refund->refund_id}}</td>
                    <td>{{$refund->reason}}</td>
                    <td>N{{number_format($refund->placeOrder->deposit)}}</td>
                    <td>{{$refund->created_at}}</td>

                    <td>
                      @if ($refund->status != 'refunded')
                      <a href="{{ route('paid.refunds', $refund->id) }}" class="btn btn-outline-success">Done</a>
                      @endif
                  </td>
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
