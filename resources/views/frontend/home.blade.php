@extends('layouts.frontend.app')

@section('content')

<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/beka/img/bg-web.png);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Mari Berpikir Positif</span>
            <h1 class="display-4">Bersama Sahabat BK</h1>
            <a href="/consult" class="btn btn-primary">Mari Konsultasi</a>
        </div>
    </div>
</div>

<div class="page-section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
                <span></span> <b> Halo </span><span class="text-primary">Sahabat</span><span class="text-dark"> BK !!!<p class="text-grey mb-4"></b>
                <p>Sahabat tau gk sih BK itu apa ? hati-hati ya BK itu bukan suatu hal yang menakutkan bukan juga polisi siswa. So kalau begitu BK itu apa ya ?
                </p>
                <p class="text-grey mb-4">Cari tahu, yuk! </p>
                <a href="about.html" class="btn btn-primary">Pelajari lebih lanjut</a>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                <div class="img-place custom-img-1">
                    <img src="../assets/beka/img/bg-web.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div> <!-- .bg-light -->

@include('layouts.frontend.future')

@include('layouts.frontend.list')

@endsection
