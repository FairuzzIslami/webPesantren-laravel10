<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            {{-- Meta untuk tampil di Whatsapp --}}
            @if (Request::segment(1) == '')
                <meta property="og:title" content="Pesantren Al Hijrah" />
                <meta name="description" content="Pesantren Moderan dengan Fasilitas Lengkap" />
                <meta property="og:url" content="http://pesantrenalhijrah.com" />
                <meta property="og:description" content="Pesantren Al Hijrah" />
                <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}" />
                <meta property="og:type" content="article" />
                <title>Pesantren Al Hijrah</title>
            @elseif (Request::segment(1) == 'detail')
                <meta property="og:title" content="{{ $artikel->judul }}" />
                <meta name="description" content="{{ $artikel->judul }}" />
                <meta property="og:url" content="http://pesantrenalhijrah.com/detail/{{ $artikel->slug }}" />
                <meta property="og:description" content="{{ $artikel->judul }}" />
                @if ($artikel->image)
                    <meta property="og:image" content="{{ asset('storage/artikel/' . $artikel->image) }}" />
                @else
                    <meta property="og:image" content="{{ asset('assets/icons/ic-logo.png') }}" />
                @endif
                <meta property="og:type" content="article" />

                <title>Pesantren Al Hijrah | {{ $artikel->title }}</title>
            @endif
            {{-- Meta untuk tampil di Whatsapp --}}

            <link rel="icon" type="image/x-icon" href="{{asset('asset/icon/ic-logo.png')}}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">
            
            {{-- magnific --}}
            <link rel="stylesheet" href="{{asset('asset/css/magnific.css')}}">
            <link rel="stylesheet" href="{{asset('asset/js/magnific.js')}}">

            {{-- Aos init --}}
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

            {{-- Summernote CSS di antara Head--}}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

        </head>
        <body class="antialiased">

            {{-- nav --}}
            @include('layout.nav')

            {{-- content --}}
            @yield('content')

            {{-- footer --}}
            <section id="footer" class="bg-white">
                <div class="container py-3">
                    <footer>
                        <div class="row">
                            {{-- kolom 1 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Navigasi</h5>
                                <div class="d-flex mb-3">
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Gallery Sekolah</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Kegiatan Sosial</a>
                                        </li>
                                    </ul>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Alumni</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">info PSB</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Prestasi</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">Vidio Kegiatan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- kolom 2 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Follow Kami</h5>
                                <div class="d-flex mb-3">
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                    <a href="" class="text-decoration-none text-dark">
                                        <img src="{{asset('')}}" alt="" height="30" width="30" class="me-4">
                                    </a>
                                </div>
                            </div>

                            {{-- kolom 3 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="fw-bold mb-3">Kontak kami</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">info@al-rahman.sch.id</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">08923472823</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">al-rahman@gmail.com</a>
                                        </li>
                                        <li class="nav-item mb-2">
                                            <a href="" class="nav-link p-0 text-muted">al-rahman.id</a>
                                        </li>
                                    </ul>
                            </div>

                            {{-- kolom 4 --}}
                            <div class="col-12 col-md-3 mb-3">
                                <h5 class="font-inter fw-bold mb-3">alamat</h5>
                                <p>Jl.ahmad daud,No 190,Boyolali,Jawa tengah </p>
                            </div>
                        </div>
                    </footer>
                </div>  
            </section>

            <section class="bg-light border-top">
                <div class="container py-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            Pesantren Al-rahman
                        </div>
                        <div class="d-flex">
                            <p class="me-4">
                                Syarat dan ketentuan
                            </p>
                            <p>
                                <a href="" class="text-decoration-none text-dark">Kebijakan Privasi</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            {{-- footer akhir --}}
        </body>
        
        {{-- Navigation --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

        <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="{{asset('asset/js/magnific.js')}}"></script>

        {{-- Aos init --}}
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


        {{-- JQUERY
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script> --}}
        
        {{-- Summernote JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>


        <script>
            $(document).ready(function() {
                        $('#summernote').summernote({
                            height: 200,
                        });
            });
        </script>

        
        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () => { 
                if (window.scrollY > 100) {
                    navbar.classList.add("scroll-nav-active")
                    navbar.classList.add("text-nav-active")
                }else{
                    navbar.classList.remove("scroll-nav-active")
                }
            }
            AOS.init();

            // magnific
            $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.(\w+)$/, function(m) {
                            return '@2x.' + m;
                        });
                    }
                },
            });
        });
        </script>
    </html>
