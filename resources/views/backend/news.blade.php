@extends('backend.components.template')
@section('content')
    @if (session('success'))
        @include('backend.components.modal.alert.success')
    @endif

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="mb-4">
            <h1 class="h3 mb-0 text-gray-800">News</h1>
            <p>Update berita disini ya</p>
        </div>

        <div class="mb-5">
            <button class="btn btn-sm btn-primary btm-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahNews"><i
                    class="fas fa-plus"></i> Tambah News</button>
            <table id="table_event" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Tanggal Post</th>
                        <th>Nama Penulis</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newses as $news)
                        <tr>
                            <td>
                                <div style="height: 100px; width: 100px">
                                    <img src="{{ asset('storage/img/news/' . $news->image) }}" class="img-fluid">
                                </div>
                            </td>
                            <td>{{ $news->judul }}</td>
                            <td>{{ $news->tgl_post }}</td>
                            <td>{{ $news->nama_penulis }}</td>
                            <td class="d-flex flex-nowrap">
                                <a href="{{ url('dashboard/news/update/' . $news->id) }}"
                                    class="btn btn-sm btn-primary mr-2">Update</a>
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
        @include('backend.components.modal.tambah_news')
        @include('backend.components.modal.edit_news')

    </div>
@endsection
