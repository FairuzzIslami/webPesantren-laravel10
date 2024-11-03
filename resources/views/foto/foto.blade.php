@extends('layout.layout')

@section('content')
    {{-- foto --}}
<section id="foto" class="section-foto paralax" style="margin-top: 80px">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
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
                    <a href="{{ asset('storage/photo/' . $photo->image) }}" class="image-link">
                        <img src="{{ asset('storage/photo/' . $photo->image) }}" alt="" class="img-fluid">
                    </a>
                    <p class="fw-bold">{{ $photo->judul }}</p>
                </div>
            @endforeach      
        </div>
    </div>
</section> 
{{-- foto akhir --}}
@endsection