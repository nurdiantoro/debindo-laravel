@extends('backend.components.template')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inbox</h1>
        </div>

        <div class="mb-5">
            <table id="table_inbox" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th width='100%'>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inboxs as $inbox)
                        <tr>
                            <td>{{ $inbox->name }}</td>
                            <td>{{ $inbox->email }}</td>
                            <td>{{ $inbox->subject }}</td>
                            <td>{{ $inbox->message }}</td>
                            <td class="d-flex flex-nowrap">
                                <a href="{{ url('dashboard/inbox/edit/' . $inbox->id) }}"
                                    class="btn btn-sm btn-primary mr-2">Edit</a>
                                <a href="{{ url('dashboard/inbox/delete/' . $inbox->id) }}"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
