@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Youtube -->
        <div class="mb-5">
            <h1 class="h3 mb-0 text-gray-800">Youtube</h1>
            <button class="btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahYoutube"><i
                    class="fas fa-plus"></i> Tambah Youtube </button>
            <div class="row">
                @foreach ($youtubes as $youtube)
                    <div class="col col-3">
                        <div class="card">
                            <img src="{{ asset('assets/img/youtube/' . $youtube->thumbnail) }}" class="card-img-top"
                                alt="{{ $youtube->thumbnail }}">
                            <div class="card-body">
                                <span class="card-title">{{ $youtube->title }}</span>
                                <br>
                                <span class="card-text">{{ $youtube->link }}</span>
                                <p class="card-text"></p>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    <a href="{{ url('dashboard/youtube/delete/' . $youtube->id) }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Event Carousel -->
        <div class="mb-5">
            <h1 class="h3 mb-0 text-gray-800">Event Carousel</h1>
            <button class="btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahEventCarousel"><i
                    class="fas fa-plus"></i> Tambah Event Carousel </button>
            <div class="row">
                @foreach ($event_carousels as $event_carousel)
                    <div class="col col-3">
                        <div class="card">
                            <img src="{{ asset('assets/img/' . $event_carousel->foto) }}" class="card-img-top"
                                alt="{{ $event_carousel->foto }}">
                            <div class="card-body">
                                <span class="card-title">{{ $event_carousel->title }}</span>
                                <br>
                                <span class="card-text">{{ $event_carousel->subtitle }}</span>
                                <p class="card-text"></p>
                                <div class="d-flex">
                                    <button class="btn btn-primary mr-2 tombol_edit_event_carousel" data-bs-toggle="modal"
                                        data-bs-target="#modalEditYoutube" data-title="{{ $event_carousel->title }}"
                                        data-subtitle="{{ $event_carousel->subtitle }}"
                                        data-foto="{{ $event_carousel->foto }}"
                                        data-urutan="{{ $event_carousel->urutan }}" data-id="{{ $event_carousel->id }}">
                                        Edit
                                    </button>
                                    <a href="{{ url('dashboard/event_carousel/delete/' . $event_carousel->id) }}"
                                        class="btn btn-danger ">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-5">
            <h1 class="h3 mb-0 text-gray-800">Testimoni</h1>
            <button class="btn-primary btm-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahTestimoni"><i
                    class="fas fa-plus"></i> Tambah Testimoni</button>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Testimoni</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimoni)
                        <tr>
                            <td><img src="{{ asset('assets/img/testimoni/' . $testimoni->foto) }}" height="100px"></td>
                            <td>{{ $testimoni->nama }}</td>
                            <td>{{ $testimoni->jabatan }}</td>
                            <td>{{ $testimoni->testimoni }}</td>
                            <td class="d-flex flex-nowrap">
                                <a href="{{ url('dashboard' . $testimoni->id) }}"
                                    class="btn btn-sm btn-primary mr-2">Edit</a>
                                <a href="{{ url('dashboard/testimoni/delete/' . $testimoni->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal Youtube-->
        @include('backend.components.modal.tambah_youtube')
        {{-- @include('backend.components.modal.edit_youtube') --}}
        {{-- @include('backend.components.modal.delete_youtube') --}}

        <!-- Modal Event Carousel-->
        @include('backend.components.modal.tambah_event_carousel')
        @include('backend.components.modal.edit_event_carousel')
        {{-- @include('backend.components.modal.delete_event_carousel') --}}

        <!-- Modal Testimoni-->
        @include('backend.components.modal.tambah_testimoni')
        {{-- @include('backend.components.modal.edit_testimoni') --}}
        {{-- @include('backend.components.modal.delete_testimoni') --}}
    </div>
@endsection
