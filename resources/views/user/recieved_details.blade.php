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
                                        <div class="container card card-body" id="input-icons">
                                            <h4>@auth

                                                {{ $place->transaction_id }}
                                            @endauth</h4>
                                            {{-- <button onclick="myFunction()">
                                                <span class="material-icons" >content_copy</span>
                                            </button> --}}

                                            {{-- <script>
                                                function myFunction(){
                                                    var copyText =
                                                    document.getElementById("myIput");
                                                     copyText.select();
                                                     copyText.setSelectionRange(0,999999);

                                                     navigator.clipboard.writeText(copyText.value)
                                                     alert("Copied the text: " + copText.value);
                                                }
                                            </script> --}}
                                            {{-- <button type="button" class="copy-link-button" >
                                                 <span class="material-icons" >content_copy</span>
                                            </button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label" for="exampleFormControlTextarea4">ITEM DESCRIPTION</label>
                                        <div class="container card card-body">
                                            <h4>{{ $place->description }}</h4>
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">TRANSACTION PERIOD</label>
                                            <div class="container card card-body">
                                                <h4>{{ $place->period }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">QUANTITY</label>
                                            <div class="container card card-body">
                                                <h4>{{ $place->quantity }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <center>
                                        <h3>PAYMENT SUMMARY</h3>
                                    </center>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">DEPOSIT AMOUNT</label>
                                            <div class="container card card-body">
                                                <h4>₦{{ number_format($place->deposit) }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">CHARGES(Non-Refundable 5% of every
                                                deposit amount)</label>
                                            <div class="container card card-body">
                                                <h4>₦{{ number_format($place->charges) }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">Total Cost</label>
                                            <div class="container card card-body">
                                                <h4>₦{{ number_format($place->total) }}</h4>
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

                                    <form method="POST" action="{{ route('pay', $place) }}" class="form-horizontal"> @csrf
                                        <div class="row" style="margin-bottom:40px;">
                                            <div class="col-md-8 col-md-offset-2">

                                                <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                                {{-- required --}}
                                                <input type="hidden" name="orderID" value="345">
                                                {{-- <input type="hidden" name="amount" value="800000"> required in kobo --}}
                                                <input type="hidden" name="quantity" value="1">
                                                <input type="hidden" name="currency" value="NGN">
                                                <input type="hidden" name="metadata"
                                                    value="{{ json_encode($array = ['key_name' => 'value']) }}">
                                                {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                <input type="hidden" name="reference"
                                                    value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                                <input type="hidden" name="callback_url"
                                                    value="{{ route('payment.callback') }}">

                                                <div style="text-align: right; justify-content:space-between">
                                                    {{-- THIS PART SHOWS IF IT IS A SELLER IT SHOULD HAVE THE CANCEL BUTTON  ELSE BUYER SHOULD HAVE THE PAY BUTTON   --}}
                                                    @if ($place->seller_id == Auth::user()->id)
                                                        <a class="btn btn-danger btn-lg btn-block"
                                                            href="{{ route('cancel.order', $place) }}">

                                                            CANCEL
                                                        </a>
                                                    @else
                                                    <input type = "checkbox"> I Agree To <a href="">Terms</a>  & Conditions

                                                        <button class="btn btn-success btn-lg btn-block"
                                                            value="Pay">
                                                            RECIEVED
                                                        </button>
                                                    @endif


                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection
