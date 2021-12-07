<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Moderna Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/frontend/img/favicon.png" rel="icon">
  <link href="assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/frontend/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/frontend/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/frontend/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.8.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="http://fathforce.com" target="_blank"><span>FATHFORCE</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/frontend/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="/">Home</a></li>
          <li><a href="#">Article</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="about.html">About Us</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
            <li><a href="/login">Login/Register</a></li>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  @include('layouts.frontend.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/frontend/vendor/purecounter/purecounter.js"></script>
  <script src="assets/frontend/vendor/aos/aos.js"></script>
  <script src="assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/frontend/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/frontend/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/frontend/js/main.js"></script>

</body>

</html>
