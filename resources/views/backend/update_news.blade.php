@extends('backend.components.template')
@section('content')
    @if (session('success'))
        @include('backend.components.modal.alert.success')
    @endif

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">News</h1>
        </div>

        <div class="mb-5">
            <form method="POST" action="{{ url('dashboard/news/update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" value="{{ $data->id }}">
                <div class="mb-3">
                    <label for="judul" class="form-label">judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}">
                </div>
                <div class="mb-3">
                    <label for="tgl_post" class="form-label">tgl_post</label>
                    <input type="date" class="form-control" id="tgl_post" name="tgl_post" value="{{ $data->tgl_post }}">
                </div>
                <div class="mb-3">
                    <label for="nama_penulis" class="form-label">nama_penulis</label>
                    <input type="text" class="form-control" id="nama_penulis" name="nama_penulis"
                        value="{{ $data->nama_penulis }}">
                </div>
                <div class="mb-3">
                    <label for="x" class="form-label">isi</label>
                    <input id="x" type="hidden" name="isi" value="{{ $data->isi }}">
                    <trix-editor input="x" name="content"></trix-editor>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        @include('backend.components.modal.tambah_news')
        @include('backend.components.modal.edit_news')
        @include('backend.components.modal.tambah_news')
        @include('backend.components.modal.edit_news')

    </div>
@endsection
