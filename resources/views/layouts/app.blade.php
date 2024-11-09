<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="IT Mingo | IT Solutions & Business Services ">

  <meta name="title" content="IT Mingo ">
  <meta name="description" content="We hold an extremely large group of specialization. We offer the adaptive and quantifiable services in the expertise of ADVANCED WEB & MOBILE SOLUTIONS, ENTERPRISE APPS & PORTALS. We develop competitive solutions in the fields of business development, app production and implementation, Web Design and Development, Mobile Application Development , Digital Marketing and ERP Solutions.">
  <meta name="keywords" content="webempower,webempowers, best software company in raipur,best software company in nawapara rajim, top ten IT company in nawapara rajim raipur chhattisgarh, raipur it companies list,web development company rajim raipur chhattisgarh,IT company rajim, app development in rajim  raipur , website designing chhattisgarh,bulk sms raipur, bulk email provider raipur">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <!-- Primary Meta Tags -->
  <title> IT Mingo | IT Solutions & Business Services </title>
  <meta name="title" content=" IT Mingo | IT Solutions & Business Services " />
  <meta name="description" content="IT Mingo | IT Solutions & Business Services " />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://itmingo.com/" />
  <meta property="og:title" content=" IT Mingo | IT Solutions & Business Services " />
  <meta property="og:description" content="IT Mingo | IT Solutions & Business Services " />
  <meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://itmingo.com/" />
  <meta property="twitter:title" content=" IT Mingo | IT Solutions & Business Services " />
  <meta property="twitter:description" content="IT Mingo | IT Solutions & Business Services " />
  <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" />
  
  <!-- fav icon -->
  <link rel="icon" href="images/favicon.ico">

  <!-- bootstarp css file -->
  <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">

  <!-- aos.css file -->
  <link rel="stylesheet" href="{{ asset('web/css/aos.css') }}">

  <!-- fancybox css file -->
  <link rel="stylesheet" href="{{ asset('web/css/jquery.fancybox.min.css') }}">

  <!-- owl carousel css file -->
  <link rel="stylesheet" href="{{ asset('web/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('web/css/owl.theme.default.min.css') }}">

  <!--  toasts file     -->
  <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">

  <!-- main css file -->
  <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
  <title> IT Mingo | IT Solutions & Business Services </title>
  <link rel="icon" type="image/png" href="{{asset('web/images/logo2.png')}}">

      <!-- alertify js -->
    <link rel="stylesheet" href="{{ asset('alertify/alertify.css') }}"/>
    <link rel="stylesheet" href="{{ asset('alertify/alertify_theme.css') }}"/>
    <script src="{{ asset('alertify/alertify.js') }}"></script>
</head>

<body class="home-1">

@include('layouts.header')
@yield('body')
  <!-- ============== Start Footer section ========== -->
  <div class="footer">
    <div class="container">
      <div class="row justify-content-center align-items-center g-4">
        <div class="col-12 col-lg-3 col-md-6 mx-auto my-4">
          <div class="box">
            <a href="{{ route('index') }}" class="logo "><img class="my-2" src="{{('web/images/logo.png')}}" alt=""></a>
            <p>ITMingo LLP,we are passionate about leveraging technology to drive innovation and create value for our clients.</p>
            
            <h4 class="my-2">
              follow us
            </h4>
            <div class="social d-flex gap-2">
              <div class="icon"><i class="bi bi-facebook"></i></div>
              <div class="icon"><i class="bi bi-instagram"></i></div>
              <div class="icon"><i class="bi bi-twitter "></i></div>
              <div class="icon"><i class="bi bi-youtube"></i></div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4 gap-3">
          <h4>site map</h4>
          <ul class="d-flex flex-column gap-3">
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="{{ route('index') }}">home</a>
            </li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                href="{{ route('about') }}">about</a></li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                href="{{ route('service') }}">services</a></li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a
                href="{{ route('contact') }}">contact</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4 gap-3">
          <h4>follow us</h4>
          <ul class="d-flex flex-column gap-3">
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="#">facebook</a>
            </li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="#">instagram</a>
            </li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="#">linkedin</a></li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="#">x</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-3 col-md-6 mx-auto d-flex flex-column my-4 gap-3">
          <h4>Our Project</h4>
          <ul class="d-flex flex-column gap-3">
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="https://erpschool.itmingo.in/" target="_blank">School Management</a>
            </li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="https://truckbook.itmingo.in/">Truckbook Software</a>
            </li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="#">cyber
                security</a></li>
            <li class="d-flex align-items-center gap-2"><i class="bi bi-chevron-right"></i><a href="#">graphic
                design</a></li>
          </ul>
        </div>
      </div>
    </div>
    <hr>
    <div class="copyrights ">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 d-flex justify-content-start">
            <p class="creadits">
              &copy; {{ date('Y') }} ITMingo LLP. All Rights Reserved.
            </p>
          </div>
          <div class="col-12 col-md-6 d-flex justify-content-end">
            <div>
              <a href="{{route('termus')}}">Terms of Use </a>
              | <a href="{{route('privacy')}}">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ============== end Footer section ========== -->

  <!--  JQuery file     -->
  <script src="{{ asset('web/js/jquery-3.6.1.min.js') }}"></script>

  <!-- bootstrap min js -->
  <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>

  <!--  toasts file     -->
  <script src="../../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <!--  owl carousel    -->
  <script src="{{ asset('web/js/owl.carousel.min.js') }}"></script>

  <!-- aos file    -->
  <script src="{{ asset('web/js/aos.js') }}"></script>

  <!-- gsap file    -->
  <script src="{{ asset('web/js/gsap.min.js') }}"></script>

  <!--  counter     -->
  <script src="{{ asset('web/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('web/js/jquery.waypoints.js') }}"></script>

  <!-- particles js file  -->
  <script src="{{ asset('web/js/particles.min.js') }}"></script>

  <!-- jquery isotope file -->
  <script src="{{ asset('web/js/isotope.min.js') }}"></script>

  <!-- jquery fancybox file -->
  <script src="{{ asset('web/js/jquery.fancybox.min.js') }}"></script>

  <!--  main js file  -->
  <script src="{{ asset('web/js/main.js') }}"></script>


</body>


</html>

