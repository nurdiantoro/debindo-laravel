@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Team</h1>
        </div>

        <div class="mb-5">
            <button class="btn btn-primary btm-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahTeam"><i
                    class="fas fa-plus"></i> Tambah Team</button>
            <table id="table_team" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Urutan</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tingkat Jabatan</th>
                        <th>Email</th>
                        <th>Linkedin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                        <tr>
                            <td>{{ $team->urutan }}</td>
                            <td>
                                <div style="height: 100px; width: 100px">
                                    <img src="{{ asset('assets/img/team/' . $team->foto) }}" class="img-fluid"
                                        style="height: 100px; width:auto;">
                                    <img src="{{ asset('assets/img/team/' . $team->foto) }}" class="img-fluid"
                                        style="height: 100px; width:auto;">
                                </div>
                            </td>
                            <td>{{ $team->nama }}</td>
                            <td>{{ $team->jabatan }}</td>
                            <td>{{ $team->tingkat_jabatan }}</td>
                            <td>{{ $team->email }}</td>
                            <td>{{ $team->linkedin }}</td>

                            <td class="d-flex flex-nowrap">
                                <a data-bs-toggle="modal" data-bs-target="#modalEditTeam" data-id="{{ $team->id }}"
                                    data-nama="{{ $team->nama }}" data-jabatan="{{ $team->jabatan }}"
                                    data-tingkat_jabatan="{{ $team->tingkat_jabatan }}" data-email="{{ $team->email }}"
                                    data-linkedin="{{ $team->linkedin }}" data-foto="{{ $team->foto }}"
                                    class="btn btn-sm btn-primary mr-2 tombol_edit_team">Edit</a>

                                <a href="{{ url('dashboard/team/delete/' . $team->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        @include('backend.components.modal.tambah_team')
        @include('backend.components.modal.edit_team')

    </div>
@endsection
