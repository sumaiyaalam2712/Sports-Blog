@extends('backend.app')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="mb-4 col-lg-8 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Welcome to your Dashboard 🎉</h5>
                                    <p class="mb-4">
                                       Here you can add , update & delete stuffs
                                    </p>

                                    <a href="{{ route('blog.display') }}" class="btn btn-sm btn-outline-primary">View Sports Blogs</a>
                                </div>
                            </div>
                            <div class="text-center col-sm-5 text-sm-left">
                                <div class="px-0 pb-0 card-body px-md-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 col-lg-4 col-md-4">
                    <div class="row">
                        <div class="mb-4 col-lg-6 col-md-12 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="flex-shrink-0 avatar">
                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="p-0 btn" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="mb-1 fw-semibold d-block">Subscribers</span>
                                    <h3 class="mb-2 card-title">$12,628</h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +72.80%</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-6 col-md-12 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="flex-shrink-0 avatar">
                                            <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="p-0 btn" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Sales</span>
                                    <h3 class="mb-1 card-title text-nowrap">$4,679</h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +28.42%</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Total Revenue -->

                <!--/ Total Revenue -->
                <div class="order-3 col-12 col-md-8 col-lg-4 order-md-2">
                    <div class="row">
                        <div class="mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="flex-shrink-0 avatar">
                                            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="p-0 btn" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="mb-1 d-block">Payments</span>
                                    <h3 class="mb-2 card-title text-nowrap">$2,456</h3>
                                    <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                        -14.82%</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="flex-shrink-0 avatar">
                                            <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                                class="rounded" />
                                        </div>
                                        <div class="dropdown">
                                            <button class="p-0 btn" type="button" id="cardOpt1"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="mb-1 fw-semibold d-block">Transactions</span>
                                    <h3 class="mb-2 card-title">$14,857</h3>
                                    <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                        +28.14%</small>
                                </div>
                            </div>
                        </div>
                        <!-- </div>
                <div class="row"> -->

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Order Statistics -->

                <!--/ Order Statistics -->

                <!-- Expense Overview -->

                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="order-2 mb-4 col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0 card-title me-2">Features</h5>
                            <div class="dropdown">
                                <button class="p-0 btn" type="button" id="transactionID" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                                    <a class="dropdown-item" href="javascript:void(0);"></a>
                                    <a class="dropdown-item" href="javascript:void(0);"></a>
                                    <a class="dropdown-item" href="javascript:void(0);"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="pb-1 mb-4 d-flex">

                                    <div class="flex-wrap gap-2 d-flex w-100 align-items-center justify-content-between">
                                        <div class="me-2">
                                            <small class="mb-1 text-muted d-block">blog</small>
                                            <a href="{{ route('blog.display') }}" ><h6 class="mb-0">Sports Blog</h6></a>
                                        </div>
                                        <div class="gap-1 user-progress d-flex align-items-center">
                                            <h6 class="mb-0">Total</h6>
                                            <span class="text-muted">{{ $blog }}</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="pb-1 mb-4 d-flex">

                                    <div class="flex-wrap gap-2 d-flex w-100 align-items-center justify-content-between">
                                        <div class="me-2">
                                            <small class="mb-1 text-muted d-block">score</small>
                                            <a href="{{ route('score.display') }}" ><h6 class="mb-0">Score Card</h6></a>
                                        </div>
                                        <div class="gap-1 user-progress d-flex align-items-center">
                                            <h6 class="mb-0">Total</h6>
                                            <span class="text-muted">{{ $score }}</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="pb-1 mb-4 d-flex">

                                    <div class="flex-wrap gap-2 d-flex w-100 align-items-center justify-content-between">
                                        <div class="me-2">
                                            <small class="mb-1 text-muted d-block">subscription</small>
                                            <a href="{{ route('score.display') }}" ><h6 class="mb-0">Subscription Category</h6></a>
                                        </div>
                                        <div class="gap-1 user-progress d-flex align-items-center">
                                            <h6 class="mb-0">Total</h6>
                                            <span class="text-muted">{{ $subscription }}</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Transactions -->

                <div class="mb-4 col-md-6 col-lg-4 col-xl-4 order-0">
                    <div class="card h-100">
                        <div class="pb-0 card-header d-flex align-items-center justify-content-between">
                            <div class="mb-0 card-title">
                                <h5 class="m-0 me-2">Blog Briefing</h5>
                                <small class="text-muted">{{ $blog }} Total Blogs</small>
                            </div>
                            <div class="dropdown">
                                <button class="p-0 btn" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                    <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="gap-1 d-flex flex-column align-items-center">
                                    <h2 class="mb-2">8,258</h2>
                                    <span>Total Orders</span>
                                </div>
                                <div id="orderStatisticsChart"></div>
                            </div>
                            <ul class="p-0 m-0">
                                <li class="pb-1 mb-4 d-flex">
                                    <div class="flex-shrink-0 avatar me-3">
                                        <span class="rounded avatar-initial bg-label-primary"><i
                                                class="bx bx-mobile-alt"></i></span>
                                    </div>
                                    <div class="flex-wrap gap-2 d-flex w-100 align-items-center justify-content-between">
                                        <div class="me-2">
                                            <h6 class="mb-0">General News</h6>
                                            <small class="text-muted">general news</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">total {{ $general }}</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="pb-1 mb-4 d-flex">
                                    <div class="flex-shrink-0 avatar me-3">
                                        <span class="rounded avatar-initial bg-label-success"><i
                                                class="bx bx-closet"></i></span>
                                    </div>
                                    <div class="flex-wrap gap-2 d-flex w-100 align-items-center justify-content-between">
                                        <div class="me-2">
                                            <h6 class="mb-0">Fashion</h6>
                                            <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">23.8k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="pb-1 mb-4 d-flex">
                                    <div class="flex-shrink-0 avatar me-3">
                                        <span class="rounded avatar-initial bg-label-info"><i
                                                class="bx bx-home-alt"></i></span>
                                    </div>
                                    <div class="flex-wrap gap-2 d-flex w-100 align-items-center justify-content-between">
                                        <div class="me-2">
                                            <h6 class="mb-0">Decor</h6>
                                            <small class="text-muted">Fine Art, Dining</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">849k</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="flex-shrink-0 avatar me-3">
                                        <span class="rounded avatar-initial bg-label-secondary"><i
                                                class="bx bx-football"></i></span>
                                    </div>
                                    <div class="flex-wrap gap-2 d-flex w-100 align-items-center justify-content-between">
                                        <div class="me-2">
                                            <h6 class="mb-0">Sports</h6>
                                            <small class="text-muted">Football, Cricket Kit</small>
                                        </div>
                                        <div class="user-progress">
                                            <small class="fw-semibold">99</small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection
