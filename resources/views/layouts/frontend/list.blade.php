<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Artikel terbaru</h1>
      <div class="row mt-5">
        @foreach ($post as $p)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{ $p->category->category_name }}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="../assets/beka/img/blog/bullying.png" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="/post/{{ $p['slug'] }}"></p>{{ $p['title'] }}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="../assets/beka/img/person/detik.png" alt="">
                  </div>
                  <span>{{ $p->user->name }}</span>
                </div>
                <br>
                <span class="mai-time"></span>{{ $p['created_at'] }}
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/blog" class="btn btn-primary">Baca Selengkapnya</a>
        </div>

      </div>
    </div>
  </div>
