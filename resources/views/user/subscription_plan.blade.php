@extends('layouts.admin_dashboard_layout')
@section('content')
    <div class="main-panel">
        <!DOCTYPE html>
        <html lang="en">
        <body>
             <!-- partial  start from here-->
            <div class="main-panel">
                <div class="content-wrapper">
                        {{-- FORM TO SUBMIT START HERE --}}
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Basic form elements</h4>
                                    <p class="card-description"> Basic form elements </p>
                                    <form action="{{route('store')}}" method="POST" class="forms-sample">@csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input name="name"   type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Amount</label>
                                            <input name="amount"   type="number" class="form-control" id="exampleInputName1"
                                                placeholder="AMOUNT">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Duration</label>
                                            <input  name="duration"   type="number" class="form-control" id="exampleInputName1"
                                                placeholder="DURATION">
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-dark">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- FORM TO SUBNIT END HERE --}}

                </div>
            </div>
            <!-- main-panel ends -->
    </div>
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../assets/vendors/select2/select2.min.js"></script>
    <script src="../../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../assets/js/file-upload.js"></script>
    <script src="../../../assets/js/typeahead.js"></script>
    <script src="../../../assets/js/select2.js"></script>
    <!-- End custom js for this page -->
    </body>

    <!-- Mirrored from www.bootstrapdash.com/demo/corona/jquery/template/modern-vertical/pages/forms/basic_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jan 2022 02:39:01 GMT -->

    </html>
@endsection
