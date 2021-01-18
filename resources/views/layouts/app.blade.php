<?php 

    if(empty(Auth::guard('student')->user()->crm_std_id)) {
        $imgURL = "public/assets/images/users/icon-man.png";
    } else {
        $crm_id = DB::connection('crm')->table('student')->where('student_id', Auth::guard('student')->user()->crm_std_id)->get();
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

        <!-- Custom box css -->
        <link href="{{ asset('public/assets/libs/custombox/custombox.min.css') }}" rel="stylesheet">
         <!-- Sweet Alert-->
        <link href="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
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

            @media(min-width: 1200px) {
                .container-fluid {
                    max-width: 100%;
                }
            }

            .border-2 {
                border-width: 2px !important;
            }

            .overflow-custom {
                height: 70vh;
                overflow: auto;
            }

            .line-height {
                line-height: 1.9;
            }

            .color-picker {
                display: block;
                margin: 10px 0 5px;
                text-align: center;
            }

            .color-picker div {
                width: 23px;
                height: 23px;
                border: 1px solid #111;
                border-radius: 12px;
                margin: 5px 8px;
                display: inline-block;
                cursor: pointer;
            }

            .color-picker div:hover {
                border: 1px solid #444;
            }

            .color-picker div.selected {
                box-shadow: #666 0 0 4px 2px;
            }

            hr {
                border-width: 2px;
                border-color: #666;
            }

            label {
                font-weight: normal;
            }
        </style>
        @yield('css')
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid position-relative">
                    
                    @if(!isset($no_highlight))
                    <div class="position-absolute d-flex justify-content-center align-items-center" style="top: 5px; left: 50%; transform: translateX(-50%);">
                        <span class="text-white">Highlight : </span>
                        <div class="color-picker mx-2">
                            <div class="selected"></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                        <button id="remove" class="btn btn-warning btn-sm">Remove All</button>
                    </div>
                    @endif

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

        <div class="wrapper mb-2">
            <div class="container-fluid">
                
                @yield('content')

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    
        <!-- Footer Start -->
        <footer class="footer mt-2">
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
        <!-- Modal-Effect -->
        <script src="{{ asset('public/assets/libs/custombox/custombox.min.js') }}"></script>
        <!-- Sweet Alerts js -->
        <script src="{{ asset('public/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <!-- Sweet alert init js-->
        <script src="{{ asset('public/assets/js/pages/sweet-alerts.init.js') }}"></script>

        @if(!isset($no_highlight))
        <script type="text/javascript" src="{{ asset('public/assets/js/text-highlight/ColorPicker.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/assets/js/text-highlight/TextHighlighter.js') }}"></script>
        <script>
            let removeBtn = document.getElementById('remove');
            let sandbox = document.querySelectorAll('.sandbox');
            
            sandbox.forEach(sand => {
                let colors = new ColorPicker(document.querySelector('.color-picker'));
                let hltr = new TextHighlighter(sand);
                colors.onColorChange(function (color) {
                    hltr.setColor(color);
                });

                removeBtn.addEventListener('click', function () {
                    hltr.removeHighlights();
                });
            })

            
        </script>
        @endif

        @yield('javascript')
        <script>
            $('input[type="text"]').attr({
                'autocomplete': 'off',
                'spellcheck': 'off',
                'onChange': 'this.value = this.value.toUpperCase()'
            });

            $('#reset').on('click', () => location.reload());
        </script>
        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
        
    </body>
</html>