<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>IT Mingo LLP | Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('assets/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('assets/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('assets/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('assets/admin/css/theme.css') }}" rel="stylesheet" media="all">
    <style>
        body{
            overflow: hidden;
            color:white !important;
        }
        .img {
            background-image: url('{{ asset('assets/admin/images/night1.jpg')  }}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center; 
            height :100%;
        }
        .login-content{
            box-shadow: 10px 10px 20px #9fc9ca;
            background:rgba(19, 3, 3, 0.6);
            border:3px solid #fff;
            border-radius:70px 0px 70px 0px !important;
        }
    </style>

    <!-- alertify js -->
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/alert/alertify.css') }}"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="{{ asset('assets/alert/alertify_theme.css') }}"/>
    <!-- JavaScript -->
    <script src="{{ asset('assets/alert/alertify.js') }}"></script>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="img">
                <div class="container">
                    <div class="login-wrap">
                        <div class="circle">
                            <div class="login-content">
                                <h4 class="text-center text-light">Login Form</h4>
                                <x-alert></x-alert>
                                <div class="login-formv mt-3">
                                    <form action="{{ route('login-submit') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input class="au-input au-input--full" value="{{ old('email') }}" type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="au-input au-input--full" type="password" value="{{ old('password') }}" name="password" placeholder="Password">
                                        </div>
                                        
                                        <div class="mt-4">
                                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('assets/admin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('assets/admin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('assets/admin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('assets/admin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('assets/admin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('assets/admin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->