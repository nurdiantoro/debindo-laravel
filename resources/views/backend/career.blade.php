@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Career</h1>
        </div>

        <div class="mb-5">
            <div class="btn btn-sm btn-primary btm-sm mb-2"><i class="fas fa-plus"></i> Tambah Career</div>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Jabatan</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($careers as $career)
                        <tr>>
                            </td>
                            <td>{{ $career->jabatan }}</td>
                            <td>{{ $career->deskripsi }}</td>
                            <td class="d-flex flex-nowrap">
                                <a href="{{ url('dashboard/career/edit/' . $career->id) }}"
                                    class="btn btn-sm btn-primary mr-2">Edit</a>
                                <a href="{{ url('dashboard/career/delete/' . $career->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
