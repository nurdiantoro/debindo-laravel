<div class="modal fade" id="modalEditTestimoni" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Edit Testimoni</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i>
                </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/testimoni/update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_id_testimoni" name="id">
                    <input type="hidden" id="edit_foto_testimoni" name="foto_lama">
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto</label>
                        <input class="form-control" type="file" id="edit_foto_testimoni" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="edit_nama_testimoni" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">jabatan</label>
                        <input type="text" class="form-control" id="edit_jabatan_testimoni" name="jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="testimoni" class="form-label">testimoni</label>
                        <textarea class="form-control" name="testimoni" id="edit_testimoni_testimoni" rows="10"></textarea>
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
