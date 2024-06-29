<div class="modal fade" id="modalEditNextEvent" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="modalEditNextEvent">Edit Event Carousel</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/next_event/update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <input type="hidden" id="edit_id_next_event" name="id">
                        <label for="image" class="form-label">image</label>
                        <input class="form-control" type="file" name="image">
                        <input type="hidden" id="edit_image_next_event" name="image_lama">
                        {{-- <input type="hidden" name="image_lama" value=""> --}}
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="edit_name_next_event" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" id="edit_tanggal_next_event" name="tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="edit_lokasi_next_event" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">link</label>
                        <input type="text" class="form-control" id="edit_link_next_event" name="link">
                    </div>
                    <div class="mb-3">
                        <label for="urutan" class="form-label">Urutan</label>
                        <input type="number" class="form-control" id="edit_urutan_next_event" name="urutan">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
