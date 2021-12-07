@extends('layouts.frontend.app')

@section('content')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/beka/img/bg-web.png);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konsultasi</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Konsultasi</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Para Mentor</h1>
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($mentor as $m)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="{{ str_contains('http', $m->photo) ? $m->photo : asset($m->photo) }}" alt="Mentor">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <center>
                        <div class="body">
                            <p class="text-xl mb-0 text-center">{{ $m->name }}</p>
                            <span class="text-sm text-grey">Mentor Konsultasi</span>
                        </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="page-section">
    <div class="container">
        <table id="table_id" class="table table-striped">
            <thead align="center">
                <tr>
                    <th>Topik</th>
                    <th>Mentor</th>
                    <th>Dimulai</th>
                    <th>Berakhir</th>
                    <th>Tautan</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($sessions as $s)
                <tr>
                    <td>{{ $s->topic }}</td>
                    <td>{{ $s->mentor }}</td>
                    <td>{{ date('d-m-Y H:i:s', strtotime($s->start_at)) }}</td>
                    <td>{{ date('d-m-Y H:i:s', strtotime($s->end_at)) }}</td>
                    <td>
                        <a href="{{ str_contains($s->link, 'http') ? $s->link : 'http://' . $s->link }}" target="_blank" class="btn btn-primary">
                            Lihat
                        </a>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://sahabatbk-salma.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    </div>
</div>
@endsection
