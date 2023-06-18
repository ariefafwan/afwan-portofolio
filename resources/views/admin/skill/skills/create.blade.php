<!-- Modal Untuk Tambah Data -->
<div class="modal fade" id="tambahskill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Skills</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form class="col-lg-12" action="{{ route('skill.store' ) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="kategori" class="form-label fw-bold">Skill Kategori</label>
                    <select class="form-select" aria-label="Default select example" id="kategori" name="skill_kategori_id">
                        @foreach ($skillkategori as $sk)
                            <option value="{{ $sk->id }}">{{ $sk->skill_kategori }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Skill Name</label>
                    <input type="text" class="form-control" id="name" name="skills" autofocus>
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