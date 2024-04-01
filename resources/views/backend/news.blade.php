@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">News</h1>
        </div>

        <div class="mb-5">
            <button class="btn btn-primary btm-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahNews"><i
                    class="fas fa-plus"></i> Tambah News</button>
            <table id="table_event" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Tanggal Post</th>
                        <th>Nama Penulis</th>
                        <th>Isi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newses as $news)
                        <tr>
                            <td>
                                <div style="height: 100px; width: 100px">
                                    <img src="{{ asset('assets/img/news/' . $news->image) }}" class="img-fluid">
                                </div>
                            </td>
                            <td>{{ $news->judul }}</td>
                            <td>{{ $news->tgl_post }}</td>
                            <td>{{ $news->nama_penulis }}</td>
                            <td>{{ $news->isi }}</td>
                            <td class="d-flex flex-nowrap">
                                <a href="{{ url('dashboard/news/edit/' . $news->id) }}"
                                    class="btn btn-sm btn-primary mr-2">Edit</a>
                                <a href="{{ url('dashboard/news/delete/' . $news->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Modal Tambah --}}
        <div class="modal fade" id="modalTambahNews" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title fs-5" id="exampleModalLabel">Tambah News</span>
                        <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('dashboard/news/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">image</label>
                                <input class="form-control" type="file" id="image" name="image">
                                {{-- <input type="hidden" name="image_lama" value=""> --}}
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="mb-3">
                                <label for="tgl_post" class="form-label">tgl_post</label>
                                <input type="text" class="form-control" id="tgl_post" name="tgl_post">
                            </div>
                            <div class="mb-3">
                                <label for="nama_penulis" class="form-label">nama_penulis</label>
                                <input type="text" class="form-control" id="nama_penulis" name="nama_penulis">
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">isi</label>
                                <input type="text" class="form-control" id="isi" name="isi">
                            </div>
                            <button type="submit" class=" btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
