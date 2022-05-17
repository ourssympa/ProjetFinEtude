<!DOCTYPE html>
<html lang="en" dir="">


<!-- Mirrored from demos.ui-lib.com/gull/html/layout1/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 14:42:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard v1 | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{ asset("UserAssets/dist-assets/css/themes/lite-purple.min.css")}}" rel="stylesheet" />
    <link href="{{ asset("UserAssets/dist-assets/css/plugins/perfect-scrollbar.min.css")}}" rel="stylesheet" />
</head>

<body class="text-left">
    <div class="app-admin-wrap  layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
              <img src="{{Asset("AdminAssets/images/logo.png")}}" alt="logo">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->
                {{-- <div class="dropdown">
                    <i class="i-Safe-Box text-muted header-icon" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="menu-icon-grid">
                            <a href="#"><i class="i-Shop-4"></i> Home</a>
                            <a href="#"><i class="i-Library"></i> UI Kits</a>
                            <a href="#"><i class="i-Drop"></i> Apps</a>
                            <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                            <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                            <a href="#"><i class="i-Ambulance"></i> Support</a>
                        </div>
                    </div>
                </div> --}}
                <!-- Notificaiton -->
                <div class="dropdown">
                    <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New message</span>
                                    <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 sec ago</span>
                                </p>
                                <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Receipt-3 text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New order received</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">2 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Empty-Box text-danger mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Product out of stock</span>
                                    <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="../../dist-assets/images/faces/1.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> Timothy Carlson
                            </div>
                            <a class="dropdown-item">Account settings</a>
                            <a class="dropdown-item">Billing history</a>
                            <a class="dropdown-item" href="signin.html">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="navigation-left">

                    <li class="nav-item" data-item="general"><a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">Générale</span></a>
                        <div class="triangle"></div>
                    </li>
                     <li class="nav-item" data-item="uikits"><a class="nav-item-hold" href="#"><i class="nav-icon i-Library"></i><span class="nav-text">Gestion de Credit</span></a>
                        <div class="triangle"></div>
                    </li>

                </ul>
            </div>
            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                <ul class="childNav" data-parent="general">
                    <li class="nav-item"><a href="{{ route('userindex') }}"><i class="nav-icon i-Bell1"></i><span class="item-name">Accueil</span></a></li>
                    <li class="nav-item"><a href="accordion.html"><i class="nav-icon i-Split-Horizontal-2-Window"></i><span class="item-name">Accordion</span></a></li>
                      <li class="nav-item"><a href="nouislider.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Sliders</span></a></li>
                </ul>
                <ul class="childNav" data-parent="uikits">
                    <li class="nav-item"><a href="{{ route('credit.create') }}"><i class="nav-icon i-Bell1"></i><span class="item-name">Faire une Demande de Credit</span></a></li>
                    <li class="nav-item"><a href="accordion.html"><i class="nav-icon i-Split-Horizontal-2-Window"></i><span class="item-name">Accordion</span></a></li>
                      <li class="nav-item"><a href="nouislider.html"><i class="nav-icon i-Width-Window"></i><span class="item-name">Sliders</span></a></li>
                </ul>

            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!-- =============== Left side End ================-->
     @yield('section')

    <!-- ============ Search UI End ============= -->
    <script src="{{ asset("UserAssets/dist-assets/js/plugins/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("UserAssets/dist-assets/js/plugins/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("UserAssets/dist-assets/js/plugins/perfect-scrollbar.min.js") }}"></script>
    <script src="{{ asset("UserAssets/dist-assets/js/scripts/script.min.js") }}"></script>
    <script src="{{ asset("UserAssets/dist-assets/js/scripts/sidebar.large.script.min.js") }}"></script>
    <script src="{{ asset("UserAssets/dist-assets/js/plugins/echarts.min.js") }}"></script>
    <script src="{{ asset("UserAssets/dist-assets/js/scripts/echart.options.min.js") }}"></script>
    <script src="{{ asset("UserAssets/dist-assets/js/scripts/dashboard.v1.script.min.js") }}"></script>
</body>


<!-- Mirrored from demos.ui-lib.com/gull/html/layout1/dashboard1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 14:42:21 GMT -->
</html>
