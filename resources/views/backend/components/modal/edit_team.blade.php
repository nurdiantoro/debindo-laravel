{{-- Modal Edit --}}
<div class="modal fade" id="modalEditTeam" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Edit Team</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/team/update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_id" name="id">
                    <input type="hidden" id="edit_foto" name="foto_lama">
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto</label>
                        <input class="form-control" type="file" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="edit_nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">jabatan</label>
                        <input type="text" class="form-control" id="edit_jabatan" name="jabatan">
                    </div>
                    <div class="mb-3">
                        <label for="tingkat_jabatan" class="form-label">tingkat_jabatan</label>
                        <select name="tingkat_jabatan" id="edit_tingkat_jabatan" class="form-control">
                            <option value="Direksi">Direksi</option>
                            <option value="Manager">Manager</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" id="edit_email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">linkedin</label>
                        <input type="text" class="form-control" id="edit_linkedin" name="linkedin">
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
