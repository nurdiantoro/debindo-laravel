{{-- Modal Edit --}}
<div class="modal fade" id="modalEditNews" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Edit News</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/news/update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_id" name="id">
                    <input type="hidden" id="edit_image" name="image_lama">
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="edit_judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_post" class="form-label">tgl_post</label>
                        <input type="date" class="form-control" id="edit_tgl_post" name="tgl_post">
                    </div>
                    <div class="mb-3">
                        <label for="nama_penulis" class="form-label">nama_penulis</label>
                        <input type="text" class="form-control" id="edit_nama_penulis" name="nama_penulis">
                    </div>
                    <div class="mb-3">
                        <label for="isi" class="form-label">isi</label>
                        <input type="text" class="form-control" id="edit_isi" name="isi">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
