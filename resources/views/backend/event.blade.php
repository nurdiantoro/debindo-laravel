@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Events</h1>
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
                                <div style="height: 100px; width: 100px">
                                    @if ($event->logo == '')
                                        <span>tidak ada logo</span>
                                    @else
                                        <img src="{{ asset('assets/img/event/' . $event->logo) }}" class="img-fluid">
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
                                <button type="button" class="btn btn-sm btn-primary mr-2" data-toggle="modal"
                                    data-target="#modalEdit" data-id="{{ $event->id }}" data-judul="{{ $event->judul }} "
                                    data-logo="{{ $event->logo }}" data-tgl_mulai="{{ $event->tgl_mulai }}"
                                    data-tgl_selesai="{{ $event->tgl_selesai }}" data-lokasi="{{ $event->lokasi }}"
                                    data-addition="{{ $event->addition }}" data-eo="{{ $event->eo }}">Edit</button>
                                <a href="{{ url('dashboard/event/delete/' . $event->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal Tambah-->
        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title fs-5" id="exampleModalLabel">Tambah events</span>
                        <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('dashboard/event/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input class="form-control" type="file" id="logo" name="logo">
                                {{-- <input type="hidden" name="logo_lama" value=""> --}}
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="tgl_mulai" class="form-label">tgl_mulai</label>
                                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="tgl_selesai" class="form-label">tgl_selesai</label>
                                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="addition" class="form-label">Tambahan
                                    <div> <small class="block">Teks banner miring</small></div>
                                </label>
                                <input type="text" class="form-control" id="addition" name="addition">
                            </div>
                            <div class="mb-3">
                                <label for="eo" class="form-label">Event Organizer</label>
                                <input type="text" class="form-control" id="eo" name="eo">
                            </div>
                            <button type="submit" class=" btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Edit-->
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title fs-5" id="exampleModalLabel">Edit events</span>
                        <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('dashboard/event/update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input class="form-control" type="file" id="logo" name="logo">
                                <input type="hidden" name="logo_lama" value="">
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="tgl_mulai" class="form-label">tgl_mulai</label>
                                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="tgl_selesai" class="form-label">tgl_selesai</label>
                                    <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">lokasi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi">
                            </div>
                            <div class="mb-3">
                                <label for="addition" class="form-label">Tambahan
                                    <div> <small class="block">Teks banner miring</small></div>
                                </label>
                                <input type="text" class="form-control" id="addition" name="addition">
                            </div>
                            <div class="mb-3">
                                <label for="eo" class="form-label">Event Organizer</label>
                                <input type="text" class="form-control" id="eo" name="eo">
                            </div>
                            <button type="submit" class=" btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
