@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Youtube -->
        <div class="my-5">
            <h1 class="h3 mb-0 text-gray-800">Youtube</h1>
            <button class="btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahYoutube"><i
                    class="fas fa-plus"></i> Tambah Youtube </button>
            <table id="table_youtube" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Thumbnail</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($youtubes as $youtube)
                        <tr>
                            <td><img src="{{ asset('storage/img/youtube/' . $youtube->thumbnail) }}" height="100px"></td>
                            <td>{{ $youtube->title }}</td>
                            <td>{{ $youtube->link }}</td>
                            <td class="d-flex flex-nowrap">
                                <button class="btn btn-sm btn-primary mr-2 tombol_edit_youtube" data-bs-toggle="modal"
                                    data-bs-target="#modalEditYoutube" data-id="{{ $youtube->id }}"
                                    data-thumbnail="{{ $youtube->thumbnail }}" data-title="{{ $youtube->title }}"
                                    data-link="{{ $youtube->link }}">Edit</button>
                                <a href="{{ url('dashboard/youtube/delete/' . $youtube->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Event Carousel -->
        <div class="my-5">
            <h1 class="h3 mb-0 text-gray-800">Event Carousel</h1>
            <button class="btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahEventCarousel"><i
                    class="fas fa-plus"></i> Tambah Event Carousel </button>
            <table id="table_event_carousel" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Urutan</th>
                        <th class="text-left">Image</th>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($event_carousels as $event_carousel)
                        <tr>
                            <td>{{ $event_carousel->urutan }}</td>
                            <td class="text-left"><img src="{{ asset('storage/img/event/' . $event_carousel->foto) }}"
                                    height="100px">
                            </td>
                            <td>{{ $event_carousel->title }}</td>
                            <td>{{ $event_carousel->subtitle }}</td>
                            <td class="d-flex flex-nowrap w-full">
                                <a class="btn btn-sm btn-primary mr-2 tombol_edit_event_carousel" data-bs-toggle="modal"
                                    data-bs-target="#modalEditEventCarousel" data-id="{{ $event_carousel->id }}"
                                    data-title="{{ $event_carousel->title }}"
                                    data-subtitle="{{ $event_carousel->subtitle }}"
                                    data-foto="{{ $event_carousel->foto }}"
                                    data-urutan="{{ $event_carousel->urutan }}">Edit</a>
                                <a href="{{ url('dashboard/event_carousel/delete/' . $youtube->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                            <td><img src="{{ asset('storage/img/testimoni/' . $testimoni->foto) }}" height="100px"></td>
                            <td>{{ $testimoni->nama }}</td>
                            <td>{{ $testimoni->jabatan }}</td>
                            <td>{{ $testimoni->testimoni }}</td>
                            <td class="d-flex flex-nowrap">
                                <a class="btn btn-sm btn-primary mr-2 tombol_edit_testimoni" data-bs-toggle="modal"
                                    data-bs-target="#modalEditTestimoni" data-id="{{ $testimoni->id }}"
                                    data-nama="{{ $testimoni->nama }}" data-jabatan="{{ $testimoni->jabatan }}"
                                    data-testimoni="{{ $testimoni->testimoni }}"
                                    data-foto="{{ $testimoni->foto }}">Edit</a>
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
        @include('backend.components.modal.edit_youtube')
        {{-- @include('backend.components.modal.delete_youtube') --}}

        <!-- Modal Event Carousel-->
        @include('backend.components.modal.tambah_event_carousel')
        @include('backend.components.modal.edit_event_carousel')
        {{-- @include('backend.components.modal.delete_event_carousel') --}}

        <!-- Modal Testimoni-->
        @include('backend.components.modal.tambah_testimoni')
        @include('backend.components.modal.edit_testimoni')
        {{-- @include('backend.components.modal.delete_testimoni') --}}
    </div>
@endsection
