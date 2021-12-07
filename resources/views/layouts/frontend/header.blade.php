<header>


    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <img src="../assets/beka/img/logo.png.png" width="150px" height="75" alt="yes">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/consult">Konsultasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blog">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        @auth
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @endauth
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
