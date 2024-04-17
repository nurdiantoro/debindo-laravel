<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Tambah events</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/event/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input class="form-control" type="file" id="logo" name="logo">
                        {{-- <input type="hidden" name="logo_lama" value=""> --}}
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="tgl_mulai" class="form-label">tgl_mulai</label>
                            <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="tgl_selesai" class="form-label">tgl_selesai</label>
                            <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="addition" class="form-label">Tambahan
                            <div> <small class="block">Teks banner miring</small></div>
                        </label>
                        <input type="text" class="form-control" id="addition" name="addition">
                    </div>
                    <div class="mb-3">
                        <label for="eo" class="form-label">Event Organizer</label>
                        <input type="text" class="form-control" id="eo" name="eo">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
