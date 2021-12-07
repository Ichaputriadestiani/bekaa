<div class="sidebar-block">
    <h3 class="sidebar-title">Recent Blog</h3>
    @foreach ($recent_posts as $post)
    <div class="blog-item">
      <a class="post-thumb" href="">
        <img src="{{ asset('images/banners/'.$post->banner) }}" alt="">
      </a>
      <div class="content">
        <h5 class="post-title"><a href="blog/{{ $post->slug }}">{{ $post->title }}</a></h5>
        <div class="meta">
          <a href="#"><span class="mai-calendar"></span> {{ $post->created_at->format('M d, Y') }}</a>
          <a href="#"><span class="mai-person"></span> {{ $post->user->name }}</a>
          {{-- <a href="#"><span class="mai-chatbubbles"></span> 19</a> --}}
        </div>
      </div>
    </div>
    @endforeach
</div>
