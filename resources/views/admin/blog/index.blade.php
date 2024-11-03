@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">
            <h2 class="fw-bold mb-3">Halaman Blog controller</h2>

            <a href="{{route('blog.create')}}" class="btn btn-primary">Buat artikel</a>


                        {{-- pesan sukses --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi </strong>{{session('success')}}
                    <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="table-responsive py-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>image</th>
                            <th>judul</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp

                        @foreach ($artikels as $artikel)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    <img src="{{asset('storage/artikel/'.$artikel->image)}}" height="100" alt="">
                                </td>
                                <td>
                                    {{$artikel->judul}}
                                </td>
                                <td>
                                    <a href="{{route('blog.edit',$artikel->id)}}" class="btn btn-warning">Edit</a>
                                    <form action="{{route('blog.destroy',$artikel->id)}}" method="post" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="alert('apakah ingin di hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection