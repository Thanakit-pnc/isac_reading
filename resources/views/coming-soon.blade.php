
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>iSAC Reading | Coming Soon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="mt-3 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="text-center">
                            <img src="{{ asset('public/assets/images/logo-nc-color.png') }}" alt="" width="150">
                        </div>

                        <div class="text-center">
                            <img src="{{ asset('public/assets/images/animat-rocket-color.gif') }}" alt="" height="160">

                            <h3 class="mt-4">Stay tunned, we're launching very soon</h3>

                            <div class="row mt-5 justify-content-center">
                                <div class="col-md-8">
                                    <div data-countdown="2021/01/15" class="counter-number"></div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div> <!-- end /.text-center-->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2020 &copy; iSAC Reading by <a href="https://newcambridge.com" class="text-primary">New Cambridge</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('public/assets/js/vendor.min.js') }}"></script>

        <!-- Plugins js-->
        <script src="{{ asset('public/assets/libs/jquery-countdown/jquery.countdown.min.js') }}"></script>

        <!-- Countdown js -->
        <script src="{{ asset('public/assets/js/pages/coming-soon.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('public/assets/js/app.min.js') }}"></script>
        
    </body>
</html>