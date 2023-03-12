@extends('layouts.admin_dashboard_layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">ALL PAID ORDERS TABLE</h3>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Paid Orders Table</h4>
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
                      <th>Paystack Ref</th>
                      <th>Description</th>
                      <th>Paid Amount</th>
                      <th>Date Registered</th>

                    </tr>
                  </thead>
                  <tbody>
                   @foreach ( $all_paidorders  as $place )
                   <tr>
                    <td>{{$place->user->name}}</td>
                    <td>{{$place->user->email}}</td>
                    <td>{{$place->user->phone}}</td>
                    <td>{{$place->transaction_id}}</td>
                    <td>{{$place->paystack_reference}}</td>
                    <td>{{$place->description}}</td>
                    <td>N{{number_format($place->deposit)}}</td>
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
  </div>
@endsection
