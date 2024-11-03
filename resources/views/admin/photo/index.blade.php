@extends('layout.layout')

@section('content')
    <section style="margin: 100px">
        <div class="container col-xxl-8 py-5">
            <h2 class="fw-bold mb-3">Halaman Photo Kegiatan</h2>

            <a href="{{route('blog.create')}}" class="btn btn-primary"  
            data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Foto</a>


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
                            <th>image</th>
                            <th>kegiatan</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        
                        @foreach ($photos as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    <img src="{{asset('storage/photo/' . $item->image)}}" alt=""
                                    height="150px">
                                </td>
                                <td>
                                    {{$item->judul}}
                                </td>
                                <td>
                                    <a href="#" class="btn btn-warning"data-bs-target="#editModal{{$item->id}}" 
                                    data-bs-toggle="modal">Edit</a>
                                    <form action="{{route('photo.destroy',$item->id)}}" method="post" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="alert('apakah ingin di hapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            {{-- Modal edit --}}
                            <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="editModal">edit Upload</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        <div class="modal-body">
                                        <form action="{{route('photo.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input type="hidden" name="id_photo" value="{{$item->id}}">
                        
                                            <div class="form-group mb-3">
                                                <label for="">Pilih photo</label>
                                                <div class="col-lg-4 py-3">
                                                    <img src="{{asset('storage/photo/' . $item->image)}}" alt="" height="100px">
                                                </div>
                                                <input type="hidden" name="old_image" value="{{$item->image}}">
                                                <input type="file" name="image" class="form-control">
                                            </div>
                    
                                            <div class="form-group mb-3">
                                                <label for="">Nama Kegiatan</label>
                                                <input type="text" name="judul" class="form-control" value="{{$item->judul}}">
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
        <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="uploadModal">Modal Upload</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                    <form action="{{route('photo.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="form-group mb-3">
                            <label for="">Pilih photo</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Nama Kegiatan</label>
                            <input type="text" name="judul" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@endsection