@extends('layouts.frontend.app')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/beka/img/bg-web.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Gallery</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">


            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
              <div class="header">
                  <a class="image-popup" href="../assets/gallery/2.jpg">
                    <img src="../assets/gallery/2.jpg" alt="">
                  </a>

                </div>
                <div class="body">
                  <span class="text-sm text-grey">Gallery 1</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
              <div class="header">
                  <img src="../assets/gallery/4.jpg" alt="" width="240px">
                </div>
                <div class="body">
                  <span class="text-sm text-grey">Gallery 2</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/gallery/6.jpg" alt="">
                </div>
                <div class="body">
                  <span class="text-sm text-grey">Gallery 3</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/gallery/8.jpg" alt="">
                </div>
                <div class="body">
                  <span class="text-sm text-grey">Gallery 4</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/gallery/10.jpg" alt="">
                </div>
                <div class="body">
                  <span class="text-sm text-grey">gallery 5</span>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/gallery/12.jpg" alt="">
                </div>
                <div class="body">
                  <span class="text-sm text-grey">Gallery 6</span>
                </div>
              </div>
            </div>
z
          </div>


        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

@endsection
