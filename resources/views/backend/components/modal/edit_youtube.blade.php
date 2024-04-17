<div class="modal fade" id="modalEditYoutube" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Edit Youtube</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/youtube/update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" id="edit_id" name="id">
                        <input type="hidden" id="edit_thumbnail" name="thumbnail_lama">
                        <label for="thumbnail" class="form-label">thumbnail</label>
                        <input class="form-control" type="file" id="edit_thumbnail" name="thumbnail">
                        {{-- <input type="hidden" name="thumbnail_lama" value=""> --}}
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="edit_title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">link</label>
                        <input type="text" class="form-control" id="edit_link" name="link">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
