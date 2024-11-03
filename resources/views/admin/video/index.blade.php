@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">
            <h2 class="fw-bold mb-3">Halaman Video Kegiatan</h2>

            <a href="{{route('blog.create')}}" class="btn btn-primary"  
            data-bs-toggle="modal" data-bs-target="#tambahVideo">Tambah video</a>


                {{-- pesan sukses --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi </strong>{{session('success')}}
                    <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Error validasi --}}
            @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="table-responsive py-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>judul</th>
                            <th>video</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        
                        @foreach ($videos as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                
                                <td>
                                    {{$item->judul}}
                                </td>

                                <td>
                                    <iframe width="150" height="150" src="https://www.youtube.com/embed/{{$item->yotube_code}}" 
                                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-warning"data-bs-target="#editVideo{{$item->id}}" 
                                    data-bs-toggle="modal">Edit</a>
                                    <form action="{{route('video.destroy',$item->id)}}" method="post" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="alert('apakah ingin di hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            {{-- Modal edit --}}
                            <div class="modal fade" id="editVideo{{$item->id}}" tabindex="-1" aria-labelledby="editVideo" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editVideo">edit Upload</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        <div class="modal-body">
                                        <form action="{{route('video.update', $item->id)}}" method="POST">
                                            @csrf

                                            <input type="hidden" name="id_video" value="{{$item->id}}">
                        
                                            <div class="form-group mb-3">
                                                <label for="">Judul Video</label>
                                                <input type="text" name="judul" class="form-control" value="{{$item->judul}}">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">Youtube Code</label>
                                                <input type="text" name="yotube_code" class="form-control" value="{{$item->yotube_code}}">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal Upload-->
        <div class="modal fade" id="tambahVideo" tabindex="-1" aria-labelledby="tambahVideo" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambahVideo">Modal video</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                    <form action="{{route('video.store')}}" method="POST">
                        @csrf
    
                        <div class="form-group mb-3">
                            <label for="">Judul</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Youtube code</label>
                            <input type="text" name="yotube_code" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection