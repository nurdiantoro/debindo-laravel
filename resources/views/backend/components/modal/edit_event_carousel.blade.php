<div class="modal fade" id="modalEditYoutube" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Edit Event Carousel</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/event_carousel/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto</label>
                        <input required class="form-control" type="file" id="foto" name="foto">
                        <input type="text" id="edit_foto" name="foto_lama" value="">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control" id="edit_title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">subtitle</label>
                        <input type="text" class="form-control" id="edit_subtitle" name="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="urutan" class="form-label">urutan</label>
                        <input type="text" class="form-control" id="edit_urutan" name="urutan">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
