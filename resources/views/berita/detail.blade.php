@extends('layout.layout')

@section('content')
    <section id="detail" class="py-5" style="margin:100px">
        <div class="container col-xxl-8 ">
            <div class="mb-3 d-flex ">
                <a href="/">Home</a> / <a href="/berita">Berita</a> / Pengajian Pesantren Al-rahman
            </div>
            <div class="card border-0">
                <img src="{{asset('storage/artikel/'.$artikel->image)}}" class="img-fluid mb-3" alt="">
            <div class="konten-berita">
                <p class="py-3 ">{{$artikel->create_at}}</p>
                <h4 class="fw-bold">{{$artikel->judul}}</h4>
                <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
        </div>
        </div>
    </section>
@endsection