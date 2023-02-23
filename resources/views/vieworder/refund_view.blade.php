@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>REFUND DETAILS</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">REFUND</li>
                            <li class="breadcrumb-item active">DETAILS</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card ongoing-project">
                        <div class="card-header card-no-border">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">BUYER REFUND DETAILS </h5>
                                </div>
                                <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                    <div class="icon-box-show onhover-show-div">
                                        <ul>
                                            <li> <a>
                                                    Pending</a></li>
                                            <li> <a>
                                                    Refunded</a></li>
                                            <li> <a>Canceled</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-bordernone">
                                    <thead>
                                        <tr>
                                            <th> <span>Refund ID</span></th>
                                            <th> <span>Date</span></th>
                                            <th> <span>Status </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($here_refunds as $refund)
                                            <tr>
                                                
                                                <td>
                                                    {{ $refund->refund_id }}
                                                </td>
                                                <td class="img-content-box">
                                                    <h6>{{ $refund->created_at }}</h6>
                                                </td>
                                                <td>
                                                    <div class="badge badge-light-primary">{{ $refund->status }}</div>
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
    </div>

@endsection
