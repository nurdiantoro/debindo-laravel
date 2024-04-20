<div class="modal fade" id="modalEditEventCarousel" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Edit Event Carousel</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/event_carousel/update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_id_event" name="id" value="">
                    <input type="hidden" id="edit_foto_event" name="foto_lama">
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto</label>
                        <input class="form-control" type="file" id="foto" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control" id="edit_title_event" name="title" value="">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">subtitle</label>
                        <input type="text" class="form-control" id="edit_subtitle_event" name="subtitle">
                    </div>
                    <div class="mb-3">
                        <label for="urutan" class="form-label">urutan</label>
                        <input type="text" class="form-control" id="edit_urutan_event" name="urutan">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
