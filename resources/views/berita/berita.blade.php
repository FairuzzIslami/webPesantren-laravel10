@extends('layout.layout')

@section('content')
    {{-- berita --}}
<section id="berita" class="py-5" style="margin: 50px">
    <div class="container py-5 ">
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
            <a href="/berita" class=" btn btn-outline-danger">Berita lainnya</a>
        </div>
    </div>
</section>
{{-- berita akhir --}}
@endsection