@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                {{-- <i class="zmdi zmdi-shopping-cart"></i> --}}
                            </div>
                            <div class="text">
                                <h2><a class="text-light" href="{{ route('product.index') }}">{{ $product_count }}</a></h2>
                                <span>Total Product</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                {{-- <i class="zmdi zmdi-shopping-cart"></i> --}}
                            </div>
                            <div class="text">
                                <h2><a class="text-light" href="{{ route('enquiry.index') }}">{{ $enquiry_count }}</a></h2>
                                <span>Total Enquiry</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                {{-- <i class="zmdi zmdi-account-o "></i> --}}
                            </div>
                            <div class="text">
                                <h2><a class="text-light" href="{{ route('customer.index') }}">{{ $customer_count }}</a></h2>
                                <span>Total Customers</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                {{-- <i class="zmdi zmdi-account-o "></i> --}}
                            </div>
                            <div class="text">
                                <h2><a class="text-light" href="{{ route('career.index') }}">{{ $career_count }}</a></h2>
                                <span>Total Resume </span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row none">
            <div class="col-lg-6">
                <div class="au-card recent-report">
                    <div class="au-card-inner">
                        <h3 class="title-2">recent reports</h3>
                        <div class="chart-info">
                            <div class="chart-info__left">
                                <div class="chart-note">
                                    <span class="dot dot--blue"></span>
                                    <span>products</span>
                                </div>
                                <div class="chart-note mr-0">
                                    <span class="dot dot--green"></span>
                                    <span>services</span>
                                </div>
                            </div>
                            <div class="chart-info__right">
                                <div class="chart-statis">
                                    <span class="index incre">
                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                    <span class="label">products</span>
                                </div>
                                <div class="chart-statis mr-0">
                                    <span class="index decre">
                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                    <span class="label">services</span>
                                </div>
                            </div>
                        </div>
                        <div class="recent-report__chart">
                            <canvas id="recent-rep-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="au-card chart-percent-card ">
                    <div class="au-card-inner">
                        <h3 class="title-2 tm-b-5">char by %</h3>
                        <div class="row no-gutters">
                            <div class="col-xl-6">
                                <div class="chart-note-wrap">
                                    <div class="chart-note mr-0 d-block">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0 d-block">
                                        <span class="dot dot--red"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="percent-chart">
                                    <canvas id="percent-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection