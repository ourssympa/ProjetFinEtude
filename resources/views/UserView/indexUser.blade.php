@extends('UserView.layout.layout')
@section('section')
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="breadcrumb">
            <h1 class="mr-2">Version 1</h1>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li>Version 1</li>
            </ul>
        </div>
        <div class="separator-breadcrumb border-top">
            <div class="card user-profile o-hidden mb-4">
                <div class="header-cover" style="background-image: url('{{asset("UserAssets/dist-assets/images/photo-wide-4.jpg")}}')"></div>
                <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="{{asset("UserAssets/dist-assets/images/faces/1.jpg")}}" alt="" />
                    <p class="m-0 text-24">Timothy Carlson</p>
                    <p class="text-muted m-0">Digital Marketer</p>
                </div>

            </div>
        </div>
        <div class="row">
            <!-- ICON BG-->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Add-User"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">New Leads</p>
                            <p class="text-primary text-24 line-height-1 mb-2">205</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Financial"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Sales</p>
                            <p class="text-primary text-24 line-height-1 mb-2">$4021</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Checkout-Basket"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Orders</p>
                            <p class="text-primary text-24 line-height-1 mb-2">80</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                    <div class="card-body text-center"><i class="i-Money-2"></i>
                        <div class="content">
                            <p class="text-muted mt-2 mb-0">Expense</p>
                            <p class="text-primary text-24 line-height-1 mb-2">$1200</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">This Year Sales</div>
                        <div id="echartBar" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title">Sales by Countries</div>
                        <div id="echartPie" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-chart-bottom o-hidden mb-4">
                            <div class="card-body">
                                <div class="text-muted">Last Month Sales</div>
                                <p class="mb-4 text-primary text-24">$40250</p>
                            </div>
                            <div id="echart1" style="height: 260px;"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card card-chart-bottom o-hidden mb-4">
                            <div class="card-body">
                                <div class="text-muted">Last Week Sales</div>
                                <p class="mb-4 text-warning text-24">$10250</p>
                            </div>
                            <div id="echart2" style="height: 260px;"></div>
                        </div>
                    </div>
                </div>


        </div><!-- end of main-content --> --}}
    </div><!-- Footer Start -->

</div>
</div>
@endsection
