@extends('layouts.admin_dashboard_layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">ALL CHARGES </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">ALL</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ALL CHARGES TABLE</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">ALL CHARGES TABLE</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Transaction Id</th>
                                            <th>Paystack Ref</th>
                                            <th>Paid Amount</th>
                                            <th>Charges</th>
                                            <th>Status</th>
                                            <th>Date Registered</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_charges as $place)
                                            <tr>
                                                <td>{{ $place->transaction_id }}</td>
                                                <td>{{ $place->paystack_reference }}</td>
                                                <td>N{{ number_format($place->deposit) }}</td>
                                                <td>N{{ number_format($place->charges) }}</td>
                                                <td>{{$place->status}}</td>
                                                <td>{{ $place->created_at }}</td>
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
