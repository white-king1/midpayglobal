@extends('layouts.admin_dashboard_layout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">ALL DEPOSITS TABLE</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Deposits Table</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Deposit Amount</th>
                                            <th>Date Registered</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_deposits as $deposit)
                                            <tr>
                                                <td>{{ $deposit->user->name}}</td>
                                                <td>{{ $deposit->user->email }}</td>
                                                <td>{{ $deposit->user->phone }}</td>
                                                <td>N{{number_format($deposit->amount)}}</td>
                                                <td>{{($deposit->created_at)}}</td>


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
