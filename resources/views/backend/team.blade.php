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
            <table id="example" class="display" style="width:100%">
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
                                    <img src="{{ asset('assets/img/team/' . $team->foto) }}" class="img-fluid">
                                </div>
                            </td>
                            <td>{{ $team->nama }}</td>
                            <td>{{ $team->jabatan }}</td>
                            <td>{{ $team->tingkat_jabatan }}</td>
                            <td>{{ $team->email }}</td>
                            <td>{{ $team->linkedin }}</td>
                            <td class="d-flex flex-nowrap">
                                <a href="{{ url('dashboard/team/edit/' . $team->id) }}"
                                    class="btn btn-sm btn-primary mr-2">Edit</a>
                                <a href="{{ url('dashboard/team/delete/' . $team->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Modal Tambah --}}
        <div class="modal fade" id="modalTambahTeam" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="modal-title fs-5" id="exampleModalLabel">Tambah Team</span>
                        <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('dashboard/team/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="foto" class="form-label">foto</label>
                                <input class="form-control" type="file" id="foto" name="foto">
                                {{-- <input type="hidden" name="foto_lama" value=""> --}}
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">jabatan</label>
                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                            </div>
                            <div class="mb-3">
                                <label for="tingkat_jabatan" class="form-label">tingkat_jabatan</label>
                                <select name="tingkat_jabatan" id="tingkat_jabatan" class="form-control">
                                    <option value="Direksi">Direksi</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="linkedin" class="form-label">linkedin</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin">
                            </div>
                            <div class="mb-3">
                                <label for="urutan" class="form-label">urutan</label>
                                <input type="text" class="form-control" id="urutan" name="urutan">
                            </div>
                            <button type="submit" class=" btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
