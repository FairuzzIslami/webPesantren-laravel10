{{-- nav bar --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top {{Request::segment(1) == '' ? '' : 'bg-white shadow text-dark'}}">
    <div class="container">
        <img src="{{asset('asset/icon/ic-logo.png')}}" width="55px" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>                    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Berita</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Prestasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">kontak</a>
        </li>
        </ul>
        <div class="d-flex" role="search">
            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-dark">Logout</button>
                </form>
                @else
                <button class="btn btn-danger" type="submit">Register</button>
            @endauth
        </div>
    </div>
    </div>
</nav>
{{-- nav bar akhir --}}     