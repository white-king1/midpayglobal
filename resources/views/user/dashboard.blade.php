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
        @if (Session::has('flash_message'))
        <center>
            <div class="alert {{ Session::get('flash_type') }} col-md-4">
                <h6>{{ Session::get('flash_message') }}</h6>
            </div>
        </center>
    @endif
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-xl-12 col-md-12 ">
                    <div class="card profile-greeting">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="row">
                                        @if (Auth::user()->image == null)
                                            <div class="col-md-2">
                                                <a href="{{route('profile')}}">
                                                <img class="rounded-circle img-fluid" src="/assets/images/avatarimagez.png"
                                                    alt="uploadimage">
                                                </a>
                                            </div>
                                        @else
                                            <div class="col-md-2 ">
                                                <img class="rounded-circle img-fluid"
                                                    src="/upload_images/{{ Auth::user()->image }}" alt="user_image">
                                            </div>
                                        @endif
                                        <div class="col-md-3" style="margin-top: 30px;">
                                            <h3 class="caption">{{ Auth::user()->name }}</h3>
                                            <h5>{{ Auth::user()->email }}</h5>
                                        </div><!-- single end -->
                                        <div class="col-md-2" style="margin-top: 30px;">
                                            <h6 class="caption">Available Balance</h6>
                                            <h5> ???{{ number_format(Auth::user()->wallet->balance) }}</h5>
                                        </div><!-- single end -->
                                        <div class="col-md-2" style="margin-top: 30px;">
                                            <h3 class="caption">Last Access</h3>
                                            <p>{{ Auth::user()->created_at }}</p>
                                        </div><!-- single end -->
                                    </div>

                                </div>
                            </div>
                            <div class="cartoon-img"><img class="img-fluid"
                                    src="http://admin.pixelstrap.com/zeta/assets/images/images.svg" alt=""></div>
                        </div>
                    </div>
                </div>

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
                                                    <span>???{{ number_format($place->deposit) }}</span>
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
                                                    <span>???{{ number_format($place->deposit) }}</span>
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
                                                        src="/assets/images/dashboard/rectangle-26.jpg" alt="">
                                                    <div class="media-body"><a href="blog-single.html">
                                                            <h5>Total sales and  Review</h5>
                                                        </a>
                                                        <p>Today's Transactions...</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-light-theme-light font-theme-light">1 Day Ago
                                                </span></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="media"><img class="img-fluid me-3 b-r-5"
                                                        src="/assets/images/dashboard/rectangle-29.jpg" alt="">
                                                    <div class="media-body"><a href="blog-single.html">
                                                            <h5>Refund Details</h5>
                                                        </a>
                                                        <p>Transaction activities</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-light-theme-light font-theme-light">2 hours
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
                <h5 class="pb-2">???{{ number_format(Auth::user()->wallet->balance) }}</h5>
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
