<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from warehouse-admin-dashboard.multipurposethemes.com/main/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 23:34:08 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://warehouse-admin-dashboard.multipurposethemes.com/images/favicon.ico">

    <title>Projet Mida</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ Asset('AdminAssets/main/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ Asset('AdminAssets/main/css/style.css') }}">
    <link rel="stylesheet" href="{{ Asset('AdminAssets/main/css/skin_color.css') }}">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loadcer"></div>

        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <!-- Logo -->
                <a href="index-2.html" class="logo">
                    <!-- logo-->
                    <div class="logo-mini w-50">
                        <span class="light-logo"><img src="{{ Asset('AdminAssets/images/logo.png') }}"
                                alt="logo"></span>
                    </div>
                    <div class="logo-lg">
                        <span class="light-logo"><img src="{{ Asset('AdminAssets/images/logo-light-text.png') }}"
                                alt="logo"></span>

                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item">
                            <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light"
                                data-toggle="push-menu" role="button">
                                <i data-feather="align-left"></i>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">

                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen"
                                class="waves-effect waves-light nav-link full-screen btn-warning-light"
                                title="Full Screen">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>
                        <!-- Notifications -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light"
                                data-bs-toggle="dropdown" title="Notifications">
                                <i data-feather="bell"></i>
                            </a>
                            <ul class="dropdown-menu animated bounceIn">

                                <li class="header">
                                    <div class="p-20">
                                        <div class="flexbox">
                                            <div>
                                                <h4 class="mb-0 mt-0">Notifications</h4>
                                            </div>
                                            <div>
                                                <a href="#" class="text-danger">Clear All</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu sm-scrol">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc
                                                suscipit blandit.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu
                                                sapien elementum, in semper diam posuere.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor
                                                commodo porttitor pretium a erat.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et
                                                nisi
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero
                                                dictum fermentum.
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam
                                                interdum, at scelerisque ipsum imperdiet.
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all</a>
                                </li>
                            </ul>
                        </li>



                        <!-- User Account-->
                        <li class="dropdown user user-menu">
                            <a href="#"
                                class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow"
                                data-bs-toggle="dropdown" title="User">
                                <img src="{{ Asset('AdminAssets/images/avatar/avatar-1.png') }}"
                                    class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                            </a>
                            <ul class="dropdown-menu animated flipInX">
                                <li class="user-body">
                                    <a class="dropdown-item" href="extra_profile.html"><i
                                            class="ti-user text-muted me-2"></i> Profile</a>
                                    <a class="dropdown-item" href="mailbox.html"><i
                                            class="ti-settings text-muted me-2"></i> Email</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="auth_login.html"><i
                                            class="ti-lock text-muted me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar-->
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <!-- sidebar menu-->
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="users"></i>
                                    <span>Gestion des Clients</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('client.index') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span
                                                    class="path2"></span></i>Liste des Clients</a></li>
                                    <li><a href="{{ route('client.create') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span
                                                    class="path2"></span></i>Creation de Compte</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i data-feather="user"></i>
                                    <span>Gestion Du Personnel</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class="treeview">
                                    <li><a href="{{ route('personnel.index') }}"><i class="icon-Commit"><span
                                                    class="path1"></span><span
                                                    class="path2"></span></i>Liste Du Personnel</a></li>

                            </li>
                            <li class="treeview">
                            <li><a href="{{ route('personnel.create') }}"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Ajout
                                    Personnel</a></li>
                            </li>

                        </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="truck"></i>
                                <span>Transactions</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('transaction.index') }}"><i class="icon-Commit"><span
                                                class="path1"></span><span
                                                class="path2"></span></i>Faire une Transaction</a></li>
                                <li><a href="{{ route('transaction.liste') }}"><i class="icon-Commit"><span
                                                class="path1"></span><span
                                                class="path2"></span></i>Liste des Transactions</a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i data-feather="truck"></i>
                                <span>Gestion des Credits</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('credit.index') }}"><i class="icon-Commit"><span
                                                class="path1"></span><span
                                                class="path2"></span></i>Les demandes de credit</a></li>
                             </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i data-feather="truck"></i>
                                <span>Gestion des Remboursements</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('remboursement.index') }}"><i class="icon-Commit"><span
                                                class="path1"></span><span
                                                class="path2"></span></i>Faire un remboursement</a></li>
                             </ul>
                        </li>
                        </ul>

                        <div class="sidebar-widgets">
                            <div class="copyright text-center m-25 text-white-50">
                                <p><strong class="d-block">Projet mida by Fiomedon and Brou</strong> ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </aside>

        <div class="content-wrapper">
            <div class="container-full">
                @yield('contents')
            </div>
        </div>

        <!-- Vendor JS -->
        <script src="{{ Asset('AdminAssets/main/js/vendors.min.js') }}"></script>
        <script src="{{ Asset('AdminAssets/mainjs/pages/chat-popup.js') }}"></script>
        <script src="{{ Asset('AdminAssets/assets/icons/feather-icons/feather.min.js') }}"></script>

        <script src="{{ Asset('AdminAssets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
        <script src="{{ Asset('AdminAssets/assets/vendor_components/progressbar.js-master/dist/progressbar.js') }}"></script>
        <script>
            document.getElementById('e').value = new Date().toISOString().substring(0, 10);
        </script>

        <script src="{{ Asset('AdminAssets/main/js/template.js') }}"></script>
        <script src="{{ Asset('AdminAssets/js/pages/dashboard2.js') }}"></script>
        @yield('script')
</body>


</html>
