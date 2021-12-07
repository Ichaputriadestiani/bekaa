@extends('layouts.frontend.app')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/beka/img/bg-web.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Post</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Artikel</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  </div>
  <div class="page-section">
    <div class="container">
        <article class="blog-details">
                    <div class="post-meta">
                    <div class="post-author">
                        <span class="text-grey">By</span> <a href="#">{{ $post->user->name }}</a>
                    </div>
                    <span class="divider">|</span>
                    <div class="post-date">
                        <a href="#">{{ $post['created_at'] }}</a>
                    </div>
                    <span class="divider">|</span>
                    </div>
                    <h2 class="post-title h1">{{ $post->title }}</h2>
                    <div class="post-content">
                    {!! $post->body !!}
                    </div>
                    <div class="post-tags">{{ $post->category->name }}</div>
            </article>
    </div>
</div>
@endsection
