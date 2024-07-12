<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="card">
        <meta name="author" content="card">
        <meta name="keywords" content="card">
        <!-- Title Page-->
        <title> card user data</title>
        <link href="{{ asset('dashboard_assets/css/font-face.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
        <!-- Bootstrap CSS-->
        <link href="{{ asset('dashboard_assets/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
        <!-- Vendor CSS-->
        <link href="{{ asset('dashboard_assets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
        <link href="{{ asset('dashboard_assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

        <!-- Main CSS-->
        <link href="{{ asset('dashboard_assets/css/theme.css') }}" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <?php
            $user = auth()->user();
        ?>
        <div class="page-wrapper">
            <!-- HEADER MOBILE-->
            <header class="header-mobile d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="container-fluid">
                        <div class="header-mobile-inner">
                            <a class="logo" href="index.html">
                                <img src="{{ asset('dashboard_assets/images/icon/logo.png') }}" alt="CoolAdmin" />
                            </a>
                            <button class="hamburger hamburger--slider" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER MOBILE-->

            <!-- MENU SIDEBAR-->
            <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="#">
                        <img src="" alt="dashboard" style="height: 90px; width:130px"/>
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                                <li>
                                    <a href="{{ route('dashboard.user.index') }}" class="sidebar-link">
                                        <i class="fas fa-user"></i>users</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('dashboard.userdata.index') }}" class="sidebar-link">
                                        <i class="fas fa-clipboard-list"></i>user data</a>
                                </li> --}}

                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- END MENU SIDEBAR-->
            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- MAIN CONTENT-->
                @yield('content')
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->

        <!-- Jquery JS-->
        <script src="{{ asset('dashboard_assets/vendor/jquery-3.2.1.min.js') }}"></script>
        <!-- Bootstrap JS-->
        <script src="{{ asset('dashboard_assets/vendor/bootstrap-4.1/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
        <!-- Vendor JS       -->
        <script src="{{ asset('dashboard_assets/vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/wow/wow.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/animsition/animsition.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('dashboard_assets/vendor/select2/select2.min.js') }}"></script>
        <script src="{{asset('dashboard_assets/ckeditor/ckeditor.js')}}" type="text/javascript"></script>

        <!-- Main JS-->
        <script src="{{ asset('dashboard_assets/js/main.js') }}"></script>

    </body>

 </html>
 <!-- end document-->

