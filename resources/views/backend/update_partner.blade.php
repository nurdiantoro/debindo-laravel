@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Partner</h1>
        </div>

        <div class="mb-5">
            <a class="btn btn-primary btm-sm mb-2" href="{{ url('dashboard/partner') }}"><i class="fas fa-arrow-left"></i>
                Kembali</a>
            <form method="POST" action="{{ url('dashboard/partner/update') }}" enctype="multipart/form-data"
                style="width: 50%; display: flex; flex-direction: column; gap: 10px;">
                @csrf
                <div>
                    <input class="form-control" type="hidden" name="id" id="id" value="{{ $data->id }}">
                    <input class="form-control" type="hidden" name="logo_lama" id="logo_lama" value="{{ $data->logo }}">
                </div>

                <div>
                    <label for="name">Judul</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $data->name }}">
                </div>
                <div>
                    <label for="logo">Logo</label>
                    <input class="form-control" type="file" name="logo" id="logo">
                </div>
                <div>
                    <label for="urutan">Urutan</label>
                    <input class="form-control" type="number" name="urutan" id="urutan" value="{{ $data->urutan }}">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>

    </div>
@endsection
