<!-- Modal Untuk Tambah Data -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Skills Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form class="col-lg-12" action="{{ route('skillkategori.store' ) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Skill Kategori</label>
                    <input type="text" class="form-control" id="name" name="skill_kategori" autofocus>
                </div>
                <div class="mb-3">
                    <label for="icon_svg_bootstrap" class="form-label fw-bold">Icon SVG Bootstrap</label>
                    <input type="text" class="form-control" id="icon_svg_bootstrap" name="icon_svg_bootstrap"
                        placeholder="Masukkan Icon Bootstrap.....">
                </div>
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i>&nbspClose</button>
                    <button type="submit" class="btn btn-success"><i class="bi bi-file-earmark-plus"></i>&nbspSubmit</button>
                </div>
            </form>
    </div>
    </div>
</div>