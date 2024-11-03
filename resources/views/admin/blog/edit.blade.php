@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">

            {{-- navigasi --}}
            <div class="d-flex">
                <a href="{{route('blog')}}">Blog</a>
                <div class="mx-1">.</div>
                <a href="">Edit artikel</a>
            </div>

            <h2 class="fw-bold mb-3">Halaman edit Artikel</h2>
            
            <form action="{{route('blog.update',$artikel->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group mb-4">
                    <label for="">Massukan judul kegiatan</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                    name="judul" value="{{old('judul',$artikel->judul)}}">

                    @error('judul')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Pilih Foto kegiatan</label>
                    <input type="hidden" name="old_image" value="{{$artikel->image}}">
                    <div>
                        <img src="{{asset('storage/artikel/'. $artikel->image)}}" alt="">
                    </div>
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
                        {!!$artikel->desc!!}
                    </textarea>
                    @error('desc')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </section>
@endsection
