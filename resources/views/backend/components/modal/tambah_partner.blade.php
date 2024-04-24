<div class="modal fade" id="modalTambahPartner" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title fs-5" id="exampleModalLabel">Tambah partners</span>
                <div type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i> </div>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('dashboard/partner/store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input required class="form-control" type="file" id="logo" name="logo">
                        {{-- <input type="hidden" name="logo_lama" value=""> --}}
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="urutan" class="form-label">Urutan</label>
                        <input type="number" class="form-control" id="urutan" name="urutan">
                    </div>
                    <button type="submit" class=" btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
