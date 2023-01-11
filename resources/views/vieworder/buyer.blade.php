@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>TRANSACTION DETAILS SUMMARY</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">TANSACTION DETAILS</li>
                        <li class="breadcrumb-item active">SUMMARY</li>
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
                        <h5>TRANSACTION DETAILS Summary</h5>
                    </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword2">TRANSACTION ID</label>
                                        <div class="container card card-body">
                                            <h4>{{$place->transaction_id}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea4">ITEM DESCRIPTION</label>
                                        <div class="container card card-body">
                                            <h4>{{$place->description}}</h4>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">TRANSACTION PERIOD</label>
                                            <div class="container card card-body">
                                                <h4>{{$place->period}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">QUANTITY</label>
                                            <div class="container card card-body">
                                                <h4>{{$place->quantity}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                  <center><h3>PAYMENT SUMMARY</h3></center>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">DEPOSIT AMOUNT</label>
                                            <div class="container card card-body">
                                                <h4>₦{{number_format($place->deposit)}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">CHARGES(5% of every deposit amount)</label>
                                            <div class="container card card-body">
                                                <h4>₦{{number_format($place->charges)}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">Total Cost</label>
                                            <div class="container card card-body">
                                                <h4>₦{{number_format($place->total)}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">STATUS</label>
                                            <div class="container card card-body">
                                                <h4>{{$transaction->status}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                                {{-- <div class="mb-3">
                                    <div class="form-check">
                                        <div class="checkbox p5">
                                            <input class="form-check-input" id="invalidCheck1" type="checkbox">
                                            <label class="form-check-label" for="invalidCheck1">DELIVERED </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <div class="checkbox p4">
                                            <input class="form-check-input" id="invalidCheck2" type="checkbox">
                                            <label class="form-check-label" for="invalidCheck2">NOT DELIVERED</label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="card-footer text-end">

                                    {{-- <a href="{{route('completed')}}">
                                        <button class="btn btn-success" type="button">MAKE PAYMENT</button>
                                    </a> --}}


                                    <form method="POST" action="{{ route('pay') }}" class="form-horizontal"> @csrf
                                        <div class="row" style="margin-bottom:40px;">
                                            <div class="col-md-8 col-md-offset-2">

                                                <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                                                <input type="hidden" name="orderID" value="345">
                                                <input type="hidden" name="amount" value="800000"> {{-- required in kobo --}}
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="currency" value="NGN">
                                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}




                                                <div style="text-align: right; justify-content:space-between">
                                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay">
                                                        <span class="spinner-border spinner-border-sm"></span> PAY
                                                    </button>

                                                    <button class="btn btn-danger btn-lg btn-block" type="reset" value="Pay Now!">
                                                         CANCEL
                                                    </button>
                                                    {{-- <input class="btn btn-danger btn-lg btn-block" type="reset" value="Cancel"> --}}
                                               </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                </div>


            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

{{-- @extends('layouts.dashboard_layout')
@section('content')




    {{-- <div class="page-wrapper compact-wrapper" id="pageWrapper">
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
                            <h3>View Orders</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">View Your</li>
                                <li class="breadcrumb-item active"> Recent Orders</li>
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
                                <h5>Order history</h5>
                            </div>
                            <div class="card-body">
                                <div class="order-history table-responsive">
                                    <table class="table table-bordernone display" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th scope="col">Transaction ID</th>
                                                <th scope="col">Name of Item</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Cost Of Item</th>
                                                <th scope="col">Midpay Fee</th>
                                                <th scope="col">Total Cost</th>
                                                <th scope="col">Action</th>
                                                <th scope="col">Date of Transaction</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>$400</td>
                                                <td>$16</td>
                                                <td>$416</td>
                                                <td>
                                                    <div class="order-process"><span
                                                            class="order-process-circle"></span>Processing</div>
                                                </td>
                                                <td>13/09/2022</td>
                                                <td>
                                                    <a href="{{ route('itemd') }}">
                                                        <button class="btn btn-success" type="button">View</button>
                                                    </a>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>$2,100</td>
                                                <td>$21</td>
                                                <td>$2,121</td>
                                                <td>
                                                    <div class="order-process"><span
                                                            class="order-process-circle"></span>Processing</div>
                                                </td>
                                                <td>13/09/2022</td>

                                                <td>
                                                    <a href="{{ route('itemd') }}">
                                                        <button class="btn btn-success" type="button">View</button>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>$2,100</td>
                                                <td>$21</td>
                                                <td>$2,121</td>
                                                <td>
                                                    <div class="order-process"><span
                                                            class="order-process-circle"></span>Processing</div>
                                                </td>
                                                <td>13/09/2022</td>

                                                <td>
                                                    <a href="{{ route('itemd') }}">
                                                        <button class="btn btn-success" type="button">View</button>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>$2,100</td>
                                                <td>$21</td>
                                                <td>$2,121</td>
                                                <td>
                                                    <div class="order-process"><span
                                                            class="order-process-circle"></span>Processing</div>
                                                </td>
                                                <td>13/09/2022</td>

                                                <td>
                                                    <a href="{{ route('itemd') }}">
                                                        <button class="btn btn-success" type="button">View</button>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>$2,100</td>
                                                <td>$21</td>
                                                <td>$2,121</td>
                                                <td>
                                                    <div class="order-process"><span
                                                            class="order-process-circle"></span>Processing</div>
                                                </td>
                                                <td>13/09/2022</td>

                                                <td>
                                                    <a href="{{ route('itemd') }}">
                                                        <button class="btn btn-success" type="button">View</button>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1276834tyh</td>
                                                <td>IPHONE 14 PRO MAX</td>
                                                <td>1</td>
                                                <td>$2,100</td>
                                                <td>$21</td>
                                                <td>$2,121</td>
                                                <td>
                                                    <div class="order-process"><span
                                                            class="order-process-circle"></span>Processing</div>
                                                </td>
                                                <td>13/09/2022</td>

                                                <td>
                                                    <a href="{{ route('itemd') }}">
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
    </div> --}}
    <!-- latest jquery-->
@endsection --}}
