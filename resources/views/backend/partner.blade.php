@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Partner</h1>
        </div>

        <div class="mb-5">
            <button class="btn btn-primary btm-sm mb-2" data-bs-toggle="modal" data-bs-target="#modalTambahPartner"><i
                    class="fas fa-plus"></i> Tambah Partner</button>
            <a href="{{ url('dashboard/partner/urutan') }}" class="btn btn-primary btm-sm mb-2"><i class="fas fa-plus"></i>
                Edit Urutan</a>
            <table id="table_partner" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Uturan</th>
                        <th style="width: 50%">Logo</th>
                        <th style="width: 50%">Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partners as $partner)
                        <tr>
                            <td class="text-center">{{ $partner->urutan }}</td>
                            <td>
                                <div style="height: 100px; width: 100px">
                                    <img src="{{ asset('assets/img/partner/' . $partner->logo) }}" class="img-fluid">
                                </div>
                            </td>
                            <td>{{ $partner->name }}</td>
                            <td class="d-flex flex-nowrap">
                                <a href="{{ url('dashboard/partner/update/' . $partner->id) }}"
                                    class="btn btn-sm btn-primary mr-2 tombol_edit_partner">Edit</a>
                                <a href="{{ url('dashboard/partner/delete/' . $partner->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('backend.components.modal.tambah_partner')
        {{-- @include('backend.components.modal.edit_partner') --}}
        {{-- @include('backend.components.modal.tambah_partner') --}}
        {{-- @include('backend.components.modal.edit_partner') --}}

    </div>
@endsection
