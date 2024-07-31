<div class="modal fade" id="modalTambahYoutube" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Tambah Youtube</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/youtube/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">thumbnail</label>
                        <small class="text-danger">(Size harus kurang dari 500kb)</small>
                        <input required class="form-control" type="file" id="thumbnail" name="thumbnail">
                        {{-- <input type="hidden" name="thumbnail_lama" value=""> --}}
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">link</label>
                        <input type="text" class="form-control" id="link" name="link">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
