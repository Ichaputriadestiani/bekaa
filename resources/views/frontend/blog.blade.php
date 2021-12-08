@extends('layouts.frontend.app')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/beka/img/bg-web.png);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Blog</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->
</div>
    <div class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($posts as $post)
                        <div class="col-sm-4 py-3">
                            <div class="card-blog">
                              <div class="header">
                                <div class="post-category">
                                  <a href="">{{ $post->category->category_name }}</a>
                                </div>
                                <a href="/blog/{{ $post->slug }}" class="post-thumb">
                                  <img src="{{ asset('images/banners/'.$post->banner) }}" alt="">
                                </a>
                              </div>
                              <div class="body">
                                <h5 class="post-title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h5>
                                <div class="site-info">
                                  <div class="avatar mr-2">
                                    <div class="avatar-img">
                                      <img src="{{ $post->user->photo }}" alt="">
                                    </div>
                                    <span>{{ $post->user->name }}</span>
                                  </div>
                                  <span class="mai-time"></span> {{ $post->created_at->diffForHumans() }}
                                </div>
                              </div>
                            </div>
                        </div>
                        @endforeach
                        @if ($posts->count()<1)
                        <div class="col-12 py-3">
                            <div class="alert alert-warning">Blog / Artikel tidak ditemukan.</div>
                        </div>
                        @endif
                    </div> <!-- .row -->
                </div>
                <div class="col-lg-4">
                  <div class="sidebar">
                    <div class="sidebar-block">
                      <h3 class="sidebar-title">Search</h3>
                      <form action="" class="search-form">
                        <div class="form-group">
                          <input type="text" class="form-control" name="q" value="{{ request()->get('q', '') }}" placeholder="Type a keyword and hit enter">
                          <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                        </div>
                      </form>
                    </div>

                    <x-category-post/>

                    <x-recent-post/>
                  </div>
                </div>
              </div> <!-- .row -->
        </div>
        <div class="card">
            <div class="card-body">
                {!! $posts->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
</div>
@endsection
