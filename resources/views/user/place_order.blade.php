@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>PLACE AN ORDER</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Order Form</li>
                            <li class="breadcrumb-item active">Input Items</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts here-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>START TRANSACTION</h5>
                        </div>
                        <form class="form theme-form" action="{{ route('order') }}" method="post">
                            @csrf
                            <div class="card-body">


                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea4">ITEM/ITEMS
                                                DESCRITPTION</label>
                                            <input class="form-control" name="description" id="exampleFormControlTextarea4"  type="text" placeholder="description"  rows="3" required>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword2">TRANSACTION PERIOD (DAYS)</label>
                                                <input class="form-control" name="period" id="exampleInputPassword2"
                                                    type="number" placeholder="transaction period (days)">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword2">QUANTITY</label>
                                                <input class="form-control" name="quantity" id="exampleInputPassword2"
                                                    type="number" placeholder="Quantity">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="exampleFormControlSelect9">CURRENCY</label>
                                                <select class="form-select digits" name="currency"
                                                    id="exampleFormControlSelect9">
                                                    <option>NGN ₦</option>
                                                    <option>GHS ¢</option>
                                                    <option>GBP £</option>
                                                    <option>USD $</option>
                                                    <option>CAD $</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword2">DEPOSIT AMOUNT</label>
                                                <input class="form-control" name="deposit" id="exampleInputPassword2"
                                                    type="text" placeholder="AMOUNT">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="exampleFormControlSelect9">DESTINATION STATE</label>
                                                <select class="form-select digits" name="state"
                                                    id="exampleFormControlSelect9">
                                                    <option>ABIA</option>
                                                    <option>ABUJA</option>
                                                    <option>ADAMAWA</option>
                                                    <option>AKWAIBOM</option>
                                                    <option>ANAMBARA</option>
                                                    <option>BAUCHI</option>
                                                    <option>BAYELSA</option>
                                                    <option>BENUE</option>
                                                    <option>BORNO</option>
                                                    <option>CROSSRIVER</option>
                                                    <option>DELTA</option>
                                                    <option>EBONYI</option>
                                                    <option>EDO</option>
                                                    <option>EKITI</option>
                                                    <option>ENUGU</option>
                                                    <option>GOMBE</option>
                                                    <option>IMO</option>
                                                    <option>JIGAWA</option>
                                                    <option>KADUNA</option>
                                                    <option>KANO</option>
                                                    <option>KASTINA</option>
                                                    <option>KEBBI</option>
                                                    <option>KOGI</option>
                                                    <option>KWARA</option>
                                                    <option>LAGOS</option>
                                                    <option>NASARAWA</option>
                                                    <option>NIGER</option>
                                                    <option>OGUN</option>
                                                    <option>ONDO</option>
                                                    <option>OSUN</option>
                                                    <option>OYO</option>
                                                    <option>PLATEAU</option>
                                                    <option>RIVERS</option>
                                                    <option>SOKOTO</option>
                                                    <option>YOBE</option>
                                                    <option>ZAMFARA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}



                                    {{-- <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword2">TOTAL COST</label>
                                                <input class="form-control" name="totalcost" id="exampleInputPassword2"
                                                    type="text" placeholder="Totalcost">
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="card-footer text-end">
                                         <button class="btn btn-primary">PlaceOrder</button>
                                        <input class="btn btn-light" type="reset" value="Cancel">
                                    </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
