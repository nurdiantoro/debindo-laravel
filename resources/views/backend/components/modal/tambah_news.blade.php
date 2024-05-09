{{-- Modal Tambah --}}
<div class="modal fade" id="modalTambahNews" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Tambah News</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/news/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input class="form-control" type="file" id="image" name="image">
                        {{-- <input type="hidden" name="image_lama" value=""> --}}
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_post" class="form-label">tgl_post</label>
                        <input type="date" class="form-control" id="tgl_post" name="tgl_post">
                    </div>
                    <div class="mb-3">
                        <label for="nama_penulis" class="form-label">nama_penulis</label>
                        <input type="text" class="form-control" id="nama_penulis" name="nama_penulis">
                    </div>

                    <input id="x" type="hidden" name="isi">
                    <trix-editor input="x" name="content"></trix-editor>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
