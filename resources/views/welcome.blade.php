
@extends('layout.layout')


@section('content')
{{-- header --}}
<section id="hero" class="px-0">
    <div class="container text-center text-white">
        <div class="hero-title">
            <div class="hero-text" data-aos="fade-up">
                <h1>
                    Selamat Datang <br> Di Pesantren Al-rahman
                </h1>
                <p>Pondok pesantren modern dengan konsep islam kaffah</p>
            </div>
        </div>
    </div>
</section>

<section id="card" style="margin-top:-40px">
    <div class="container col-xxl-9">
        <div class="row">
                <div class="col-lg-3 col-md-6 col" data-aos="flip-right">
                    <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                        <div class="text-padding">
                            <p>Pendidikan berkualitas</p>
                        </div>
                        <img src="{{asset('asset/icon/ic-book.png')}}" height="100px" alt="">
                    </div>
                </div>
            <div class="col-lg-3 col-md-6 col" data-aos="flip-right">
                <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                    <div class="text-padding">
                        <p>Pendidikan berahlak</p>
                    </div>
                    <img src="{{asset('asset/icon/ic-globe.png')}}" height="100px" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col" data-aos="flip-right">
                <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                    <div class="text-padding">
                        <p>Pendidikan muamalah</p>
                    </div>
                    <img src="{{asset('asset/icon/ic-neraca.png')}}" height="100px" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col" data-aos="flip-right">
                <div class="bg-white rounded-3 p-3 d-flex justify-content-between align-items-center ">
                    <div class="text-padding">
                        <p>Pendidikan Teknologi</p>
                    </div>
                    <img src="{{asset('asset/icon/ic-komputer.png')}}" height="100px" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
{{-- header akhir --}}

{{-- berita --}}
<section id="berita">
    <div class="container py-5" data-aos="flip-up">
        <div class="header-berita text-center align-item-center">
            <h2 class="fw-bold">Berita kegiatan Pondok pesantren</h2>
        </div>

            <div class="row py-5">
                @foreach ($artikel as $item)
                <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{asset('storage/artikel/'.$item->image)}}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="py-3 ">{{$item->create_at}}</p>
                            <h4 class="fw-bold">{{$item->judul}}</h4>
                            <p class="text-secondary">#beritaPesantren</p>
                            <a href="/detail/{{$item->slug}}"  style="text-decoration: none" class="text-danger fw-bold fs-5">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>

        <div class="footer-berita text-center py-5">
            <a href="/berita/" class=" btn btn-outline-danger">Berita lainnya</a>
        </div>
    </div>
</section>
{{-- berita akhir --}}

{{-- Join  --}}
<section id="join" class="py-5">
    <div class="container py-5" data-aos="flip-right">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                    <div class="d-flex align-item-center"> 
                        <h5 class="fw-bold text-danger">Daftar Santri</h5>
                    </div>
                    <h2 class="fw-bold">Gabung bersama kami,<br>mewujudkan generasi rabbani</h2>
                    <p>Pesantren Al-rahman Merupakan pesantren <br>
                        terbaik di Boyolali,Jawa tengah dgn meluluskan <br> Santri dan Ustad yg ber ahlak mulia dan <br> Berkualitas
                    </p>
                    <button class="btn btn-outline-danger">Register</button>
            </div>
            <div class="col-lg-6">
                <div class="d-flex py-5">
                    <img src="{{asset("asset/image/islamic-boarding-school-students-are-reading-koran-courtyard-mosque_368093-3579.jpeg")}}" width="500px" class="image-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Join akhir --}}

{{-- vidio --}}
<section id="vidio" class="py-5">
    <div class="container" data-aos="zoom-in-up">
        <div class="text-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/hSycHNqJMGk?si=iqX3z4d3DqzVKEhH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>

<section id="vidio_yt py-5">
    <div class="container" data-aos="zoom-in-up">
        <div class="header-berita text-center align-item-center py-5">
            <h2 class="fw-bold">Vidio kegiatan Pondok pesantren</h2>
        </div>
        <div class="row">
            @foreach ($videos as $item)

            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{$item->yotube_code}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>

            @endforeach
        </div>
        <div class="footer-berita text-center py-5">
            <a href="" class=" btn btn-outline-danger">Vidio lainnya</a>
        </div>
    </div>
</section>
{{-- vidio akhir --}}

{{-- foto --}}
<section id="foto" class="section-foto paralax">
    <div class="container" data-aos="fade-left"
    data-aos-anchor="#example-anchor"
    data-aos-offset="500"
    data-aos-duration="500">
        <div class="d-flex justify-content-between align-items-center mb-5 mt-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-white">Foto Kegiatan</h5>
            </div>
            <div>
                <a href="/foto" class="btn btn-outline-white">Berita lainnya</a>
            </div>
        </div>
        <div class="row py-5">
            @foreach ($photos as $photo)    
            <div class="col-lg-3 col-md-6 col-6">
                <a href="{{asset('storage/photo/' . $photo->image)}}" class="image-link">
                    <img src="{{asset('storage/photo/' . $photo->image)}}" alt="" class="img-fluid">
                </a>
                <p class="fw-bold">{{$photo->judul}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section> 
{{-- foto akhir --}}

{{-- fasilitas --}}
<section id="fasilitas" class="py-5">
    <div class="container" data-aos="zoom-out-up">
        <div class="text-center">
            <h2 class="fw-bold">Fasilitas Pesantren</h2>
        </div>
        <img src="{{asset('asset/image/Fasilitas.png')}}" class="img-fluid" alt="">
    </div>
    <div class="text-center">
        <a href="" class="btn btn-outline-danger">Fasilitas lainnya</a>
    </div>
</section>
{{-- fasilitas --}}
@endsection
            