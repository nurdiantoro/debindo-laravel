@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Events</h1>
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
                                    data-subtitle="{{ $event_carousel->subtitle }}" data-foto="{{ $event_carousel->foto }}"
                                    data-urutan="{{ $event_carousel->urutan }}">Edit</a>
                                <a href="{{ url('dashboard/event_carousel/delete/' . $event_carousel->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mb-5">
            <button class="btn btn-primary btm-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah"><i
                    class="fas fa-plus"></i> Tambah Event</button>

            <table id="table_event" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Lokasi</th>
                        <th>EO</th>
                        <th>Additional</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>
                                <div style="height: 50px; width: 100px">
                                    @if ($event->logo == '')
                                        <span>tidak ada logo</span>
                                    @else
                                        <img src="{{ asset('storage/img/event/' . $event->logo) }}" class="img-fluid"
                                            style="height: 50px">
                                    @endif
                                </div>
                            </td>
                            <td>{{ $event->judul }}</td>
                            <td>{{ $event->tgl_mulai }}</td>
                            <td>{{ $event->tgl_selesai }}</td>
                            <td>{{ $event->lokasi }}</td>
                            <td>{{ $event->eo }}</td>
                            <td>{{ $event->addition }}</td>
                            <td class="d-flex flex-nowrap">
                                <a type="button" class="btn btn-sm btn-primary mr-2 tombol_edit_event" data-toggle="modal"
                                    data-target="#modalEdit" data-id="{{ $event->id }}"
                                    data-judul="{{ $event->judul }} " data-logo="{{ $event->logo }}"
                                    data-tgl_mulai="{{ $event->tgl_mulai }}" data-tgl_selesai="{{ $event->tgl_selesai }}"
                                    data-lokasi="{{ $event->lokasi }}" data-addition="{{ $event->addition }}"
                                    data-eo="{{ $event->eo }}">Edit</a>
                                <a href="{{ url('dashboard/event/delete/' . $event->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('backend.components.modal.tambah_event')
        @include('backend.components.modal.edit_event')

        <!-- Modal Event Carousel-->
        @include('backend.components.modal.tambah_event_carousel')
        @include('backend.components.modal.edit_event_carousel')
        {{-- @include('backend.components.modal.delete_event_carousel') --}}

    </div>
@endsection
