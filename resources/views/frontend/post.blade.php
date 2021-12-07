@extends('layouts.frontend.app')

@section('content')
  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{ asset('images/banners/'.$post->banner) }}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#">{{ $post->user->name }}</a>
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">{{ $post->created_at->format('M d, Y') }}</a>
              </div>
              <span class="divider">|</span>
              <div>
                {{-- <a href="#">StreetStyle</a>, <a href="#">Fashion</a>, <a href="#">Couple</a> --}}
                <a href="/{{ $post->category->category_slug }}">{{ $post->category->category_name }}</a>
              </div>
              {{-- <span class="divider">|</span>
              <div class="post-comment-count">
                <a href="#">8 Comments</a>
              </div> --}}
            </div>
            <h2 class="post-title h1">{{ $post->title }}</h2>
            <div class="post-content">{!! $post->body !!}</div>
            {{-- <div class="post-tags">
              <a href="#" class="tag-link">LifeStyle</a>
              <a href="#" class="tag-link">Food</a>
              <a href="#" class="tag-link">Coronavirus</a>
            </div> --}}
          </article> <!-- .blog-details -->

          @comments(['model'=>$post])
          {{-- <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>

              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>

            </form>
          </div> --}}
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="/blog" class="search-form">
                <div class="form-group">
                  <input type="text" name="q" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>

            <x-category-post />

            <x-recent-post />
          </div>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->
@endsection
