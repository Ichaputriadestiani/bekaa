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
            @foreach($galleries as $gallery)
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card">
                <div class="card-header p-0">
                  <a class="popup-image" href="{{ asset('assets/gallery/'.$gallery->picture) }}">
                    <img src="{{ asset('assets/gallery/'.$gallery->picture) }}" alt="" class="w-100">
                  </a>
                </div>
                <div class="card-body">
                  <span class="text-sm text-grey">{{ $gallery->title }}</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->
@endsection
