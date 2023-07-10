<!-- Modal Untuk Tambah Data -->
<div class="modal fade" id="edittag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form class="col-lg-12" action="{{ route('tag.update' ) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="tagname" class="form-label fw-bold">Nama Tag</label>
                    <input type="text" class="form-control" id="tagname" name="name" required>
                    <input type="hidden" class="form-control" id="editid" name="id" required>
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