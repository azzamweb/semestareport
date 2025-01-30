<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Semesta Report System</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets2/images/favicon.svg') }}" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/LineIcons.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/css/main.css') }}" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
    @include('partials.navbar')  
    </header>
    <!-- End Header Area -->

  <div class="maincontent">

 
   @yield('content') 
</container>
   
   
   

    <!-- Start Footer Area -->
    <footer class="footer section">

    @include('partials.footer') 
       
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/js/wow.min.js') }}"></script>
   
    <script src="{{ asset('assets2/js/main.js') }}"></script>

</body>

</html>