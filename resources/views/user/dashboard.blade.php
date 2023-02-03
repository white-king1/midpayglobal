@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>You are Welcome,</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Dashboard</li>
                            <li class="breadcrumb-item active"> Default</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-xl-12 col-md-12 ">
                    <div class="card profile-greeting">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="greeting-user">
                                        <h1> {{ Auth::user()->name }}</h1>
                                        <p>Your dashboard is ready!</p>
                                        <br>
                                        <br>
                                        <h5>Available Balance: ₦{{ number_format(Auth::user()->wallet->balance) }}</h5>
                                        <br>
                                        <h5>Pending Balance: ₦{{ number_format(Auth::user()->wallet->pending_balance) }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cartoon-img"><img class="img-fluid"
                                    src="http://admin.pixelstrap.com/zeta/assets/images/images.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-3 col-md-6 dash-xl-50">
                    <div class="card pb-0 o-hidden earning-card">
                        <div class="card-header earning-back"></div>
                        <div class="card-body p-0">
                            <div class="earning-content"><img class="img-fluid" src="../assets/images/avatar.jpg"
                                    alt=""><a href="blog-single.html">
                                    <h4>Wallet Balance</h4>
                                    <h6>Available balance:₦{{ number_format(Auth::user()->wallet->balance) }}</h6>
                                </a><span>Pending balance:₦0.00 </span>

                                <div id="earning-chart"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}


                <div class="col-xl-12 col-md-12 dash-50">
                    <div class="card ongoing-project">
                        <div class="card-header card-no-border">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">SELLER ORDER TRANSACTIONS </h5>
                                </div>
                                <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                    <div class="icon-box-show onhover-show-div">
                                        <ul>
                                            <li> <a>
                                                    Pending</a></li>
                                            <li> <a>
                                                    Paid</a></li>
                                            <li> <a>
                                                    Completed</a></li>
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
                                            <th> <span>Transaction ID</span></th>
                                            <th> <span>Date</span></th>
                                            <th> <span>Details </span></th>
                                            <th> <span>Status </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sell_orders as $place)
                                            <tr>
                                                <td>
                                                    {{ $place->transaction_id }}
                                                </td>
                                                <td class="img-content-box">
                                                    <h6>{{ $place->created_at }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $place->description }}</h6>
                                                    <span>₦{{ number_format($place->deposit) }}</span>
                                                </td>
                                                <td>
                                                    <div class="badge badge-light-primary">{{ $place->status }}</div>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12 dash-50">
                    <div class="card ongoing-project">
                        <div class="card-header card-no-border">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">BUYER ORDER TRANSACTIONS </h5>
                                </div>
                                <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                    <div class="icon-box-show onhover-show-div">
                                        <ul>
                                            <li> <a>
                                                    Pending</a></li>
                                            <li> <a>
                                                    Paid</a></li>
                                            <li> <a>
                                                    Completed</a></li>
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
                                            <th> <span>Transaction ID</span></th>
                                            <th> <span>Date</span></th>
                                            <th> <span>Details </span></th>
                                            <th> <span>Status </span></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buy_orders as $place)
                                            <tr>
                                                <td>
                                                    {{ $place->transaction_id }}
                                                </td>
                                                <td class="img-content-box">
                                                    <h6>{{ $place->created_at }}</h6>
                                                </td>
                                                <td>
                                                    <h6>{{ $place->description }}</h6>
                                                    <span>₦{{ number_format($place->deposit) }}</span>
                                                </td>
                                                <td>
                                                    <div class="badge badge-light-primary">{{ $place->status }}</div>
                                                </td>
                                                <td>
                                                    <form action="{{ route('recieved.order', $place->transaction_id) }}"
                                                        method="POST">@csrf


                                                        @if ($place->status != 'completed')
                                                            <button class="btn btn-success" type="submit">Recieved</button>
                                                        @endif


                                                    </form>
                                                </td>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- <div class="col-xl-6 col-lg-12 dash-xl-100">
        <div class="card total-transactions">
            <div class="row m-0">
                <div class="col-md-6 col-sm-6 p-0">
                    <div class="card-header card-no-border">
                        <h5>Total Transactions</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <div id="transaction-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 p-0 report-sec">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Report</h5>
                            <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                <div class="icon-box-show onhover-show-div">
                                    <ul>
                                        <li> <a>
                                                Today</a></li>
                                        <li> <a>
                                                Yesterday</a></li>
                                        <li> <a>
                                                Tommorow</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-6 report-main">
                                <div class="report-content text-center">
                                    <p class="font-theme-light">This Week</p>
                                    <h5>+86.53%</h5>
                                    <div class="progress progress-round-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 45%"
                                            aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="report-content text-center">
                                    <p class="font-theme-light">Last Week</p>
                                    <h5>-34.50%</h5>
                                    <div class="progress progress-round-secondary">
                                        <div class="progress-bar" role="progressbar" style="width: 65%"
                                            aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="media report-perfom">
                                    <div class="media-body">
                                        <p class="font-theme-light">Performance </p>
                                        <h5 class="m-0">+93.82%</h5>
                                    </div><a class="btn btn-primary" href="">New Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
                <div class="col-xl-4 col-md-6 dash-31 dash-xl-50">
                    <div class="card recent-activity">
                        <div class="card-header card-no-border">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">NEWS & UPDATE </h5>
                                </div>
                                <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                    <div class="icon-box-show onhover-show-div">
                                        <ul>
                                            <li> <a>
                                                    Today</a></li>
                                            <li> <a>
                                                    Yesterday</a></li>
                                            <li> <a>
                                                    Tommorow</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-bordernone">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media"><img class="img-fluid me-3 b-r-5"
                                                        src="../assets/images/dashboard/rectangle-26.jpg" alt="">
                                                    <div class="media-body"><a href="blog-single.html">
                                                            <h5>Google Project Apply Reviwe</h5>
                                                        </a>
                                                        <p>Today's News Headlines, Breaking...</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-light-theme-light font-theme-light">1 Day Ago
                                                </span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="media"><img class="img-fluid me-3 b-r-5"
                                                        src="../assets/images/dashboard/rectangle-29.jpg" alt="">
                                                    <div class="media-body"><a href="blog-single.html">
                                                            <h5>Recruitment in it Department</h5>
                                                        </a>
                                                        <p>Technology and Indian Business News...</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-light-theme-light font-theme-light">2 hours
                                                    ago</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media"><img class="img-fluid me-3 b-r-5"
                                                        src="../assets/images/dashboard/rectangle-28.jpg" alt="">
                                                    <div class="media-body"><a href="blog-single.html">
                                                            <h5>Business Project Research</h5>
                                                        </a>
                                                        <p>News in English: Get all Breaking...</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-light-theme-light font-theme-light">3 day
                                                    ago</span></td>
                                        </tr>
                            </div>
                        </div>
                    </div>
                </div>
                </td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="col-xl-3 col-md-6 dash-xl-50">
        <div class="card yearly-chart">
            <div class="card-header card-no-border pb-0">
                <h5 class="pb-2">₦{{ number_format(Auth::user()->wallet->balance) }}</h5>
                <h6 class="font-theme-light f-14 m-0">(January-December)2023</h6>
            </div>
            <div class="card-body pt-0">
                <div>
                    <div id="yearly-chart"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-xl-3 col-md-6 dash-xl-50">
        <div class="card bg-primary premium-access">
            <div class="card-body">
                <h6 class="f-22">Premium Access!</h6>
                <p>We add 20+ new features and update community in your project We add 20+ new features</p><a
                    class="btn btn-outline-white_color" href=""> Try now for free</a>
            </div>
            <!-- Root element of PhotoSwipe. Must have class pswp.-->
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="pswp__bg"></div>
                <div class="pswp__scroll-wrap">
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
                    <div class="pswp__ui pswp__ui--hidden">
                        <div class="pswp__top-bar">
                            <div class="pswp__counter"></div>
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                            <button class="pswp__button pswp__button--share" title="Share"></button>
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                    <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div>
                        </div>
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
@endsection
