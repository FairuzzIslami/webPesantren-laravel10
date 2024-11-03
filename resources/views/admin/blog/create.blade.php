@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">

            {{-- navigasi --}}
            <div class="d-flex">
                <a href="{{route('blog')}}">Blog</a>
                <div class="mx-1">.</div>
                <a href="">Buat artikel</a>
            </div>

            <h2 class="fw-bold mb-3">Halaman create Artikel</h2>
            
            <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group mb-4">
                    <label for="">Massukan judul kegiatan</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                    name="judul" value="{{old('judul')}}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Pilih Foto kegiatan</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" 
                    name="image" value="{{old('image')}}">

                    @error('image')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Artikel Berita kegiatan</label>
                    <textarea name="desc" id="summernote" >
                        {{old('desc')}}
                    </textarea>
                    @error('desc')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
