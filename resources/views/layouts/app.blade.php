<?php 

    if(empty(Auth::guard('student')->user()->crm_std_id)) {
        $imgURL = "public/assets/images/users/icon-man.png";
    } else {
        $crm_id = DB::connection('crm')->table('enquiry')->where('enquiry_id', Auth::guard('student')->user()->crm_std_id)->get();
        if($crm_id[0]->gender == 'm') {
            $imgURL = "public/assets/images/users/icon-man.png";
        } else {
            $imgURL = "public/assets/images/users/icon-girl.png";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title', 'iSAC Reading')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
            @media(min-width: 991px) {
                .wrapper {
                    padding-top: 70px !important;
                }
            }

            .border-2 {
                border-width: 2px !important;
            }
        </style>
        @yield('css')
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset($imgURL) }}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{ Auth::guard('student')->user()->std_name }} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title pb-1">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="remixicon-logout-box-line"></i>
                                    <span>Logout</span>
                                </a>

                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>            

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="{{ url('/home') }}" class="logo text-center">
                            <span class="logo-lg">
                                <span class="logo-lg-text-light d-flex align-items-center"><i class="mdi mdi-book-open-page-variant mdi-36px mr-2"></i> iSAC Reading</span>
                            </span>
                            <span class="logo-sm text-white">
                                <span class="logo-sm-text-dark">
                                    <i class="mdi mdi-book-open-page-variant mdi-36px mr-2"></i>
                                </span>
                            </span>
                        </a>
                    </div>


                </div>
            </div>
            <!-- end Topbar -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                @yield('content')

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                       2020 &copy; iSAC Reading by <a href="https://newcambridge.com">New Cambridge</a> 
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>
        @yield('javascript')
        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
        
    </body>
</html>