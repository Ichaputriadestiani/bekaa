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
				 <div class="col-sm-0 main">
                 @foreach ($post as $p)
                 <div id="unique-entry-id-0" class="blog-entry">
						<h1 class="blog-entry-title"><a href="/post/{{ $p['slug'] }}" class="blog-permalink">{{ $p['title'] }}</a></h1>
						<div class="blog-entry-date">Created at : {{ $p['created_at'] }} <span class="blog-entry-category"><a href="files/category-author-by-cecep-abu-azhar.html">Author : {{ $p->user->name }}</a></span></div>
						<div class="blog-entry-body">{{ $p->expert }}
							<span class="blog-read-more"><a href="/post/{{ $p['slug'] }}"> Read More…</a></span>
						</div>
					</div>
                 @endforeach
				</div>
			</div>
		</div>
<div class="card">
  <div class="card-body">

        {!! $post->links('pagination::bootstrap-4') !!}
</div>
</div>
    </div>
</div>
@endsection
