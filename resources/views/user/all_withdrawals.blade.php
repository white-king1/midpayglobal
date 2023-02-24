@extends('layouts.admin_dashboard_layout')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">ALL WITHDRAWALS </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">ALL</a></li>
            <li class="breadcrumb-item active" aria-current="page">WITHDRAWALS TABLE</li>
          </ol>
        </nav>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">WITHDRAWALS table</h4>
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Withdrawl_Amount</th>
                      <th>Details</th>
                      <th>Date</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($all_withdrawals as $withdraw)
                    <tr>
                      <td>{{ $withdraw->user->name}}</td>
                      <td>{{ $withdraw->user->email}}</td>
                      <td>{{ $withdraw->user->phone}}</td>
                      <td>N{{number_format($withdraw->amount)}}</td>
                      <td>
                        {{($withdraw->details)}}
                      </td>
                      <td>{{($withdraw->created_at)}}</td>

                      <td>
                        @if ($withdraw->status != 'success')
                        <a href="{{route('paid.withdrawals',$withdraw->id)}}" class="btn btn-success" type="submit">Paid</a>
                        @endif
                    </td>
                      @endforeach
                    </tr>
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
