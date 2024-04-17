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
                                <button data-bs-toggle="modal" data-bs-target="#modalEditNews" type="button"
                                    class="btn btn-sm btn-primary mr-2 tombol_edit_news" data-id="{{ $news->id }}"
                                    data-judul="{{ $news->judul }}" data-tgl_post="{{ $news->tgl_post }}"
                                    data-nama_penulis="{{ $news->nama_penulis }}" data-isi="{{ $news->isi }}"
                                    data-image="{{ $news->image }}">Edit</button>
                                <a href="{{ url('dashboard/news/delete/' . $news->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('backend.components.modal.tambah_news')
        @include('backend.components.modal.edit_news')

    </div>
@endsection
