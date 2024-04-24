@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Urutan</h1>
        </div>

        <div class="mb-5">
            <a class="btn btn-primary btm-sm mb-2" href="{{ url('dashboard/partner') }}"><i class="fas fa-arrow-left"></i>
                Kembali</a>
            <form method="POST" action="{{ url('dashboard/partner/update_urutan') }}"
                style="width: 50%; display: flex; flex-direction: column; gap: 10px;">
                @csrf

                <table class="table">
                    <thead>
                        <td>Logo</td>
                        <td>Nama</td>
                        <td>Urutan</td>
                    </thead>
                    @foreach ($data as $partner)
                        <tr>
                            <input type="hidden" value="{{ $partner->id }}" name="id[{{ $partner->id }}]">
                            <td><img src="{{ asset('assets/img/partner/' . $partner->logo) }}" style="height: 20px"></td>
                            <td>{{ $partner->name }}</td>
                            <td>
                                <input required type="number" value="{{ $partner->urutan }}"
                                    name="urutan[{{ $partner->id }}]" class="form-control">
                            </td>
                        </tr>
                    @endforeach
                </table>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>

    </div>
@endsection
