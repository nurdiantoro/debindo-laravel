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

        <!-- Next Event -->
        <div class="my-5">
            <h1 class="h3 mb-0 text-gray-800">Next Event</h1>
            <button class="btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahNextEvent"><i
                    class="fas fa-plus"></i> Tambah Next Event </button>
            <table id="table_event_carousel" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Urutan</th>
                        <th class="text-left">Image</th>
                        <th>Event</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($next_events as $next_event)
                        <tr>
                            <td>{{ $next_event->urutan }}</td>
                            <td class="text-left"><img src="{{ asset('storage/img/event/' . $next_event->image) }}"
                                    height="100px">
                            </td>
                            <td>{{ $next_event->name }}</td>
                            <td>{{ $next_event->tanggal }}</td>
                            <td>{{ $next_event->lokasi }}</td>
                            <td class="d-flex flex-nowrap w-full">
                                <button class="btn btn-sm btn-primary mr-2 tombol_edit_next_event" data-bs-toggle="modal"
                                    data-bs-target="#modalEditNextEvent" data-id="{{ $next_event->id }}"
                                    data-name="{{ $next_event->name }}" data-tanggal="{{ $next_event->tanggal }}"
                                    data-lokasi="{{ $next_event->lokasi }}" data-link="{{ $next_event->link }}"
                                    data-image="{{ $next_event->image }}"
                                    data-urutan="{{ $next_event->urutan }}">Edit</button>
                                <a href="{{ url('dashboard/next_event/delete/' . $next_event->id) }}"
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

        <!-- Modal Testimoni-->
        @include('backend.components.modal.tambah_testimoni')
        @include('backend.components.modal.edit_testimoni')
        {{-- @include('backend.components.modal.delete_testimoni') --}}

        <!-- Modal Next Event-->
        @include('backend.components.modal.tambah_next_event')
        @include('backend.components.modal.edit_next_event')
        {{-- @include('backend.components.modal.delete_next_event') --}}
    </div>
@endsection
