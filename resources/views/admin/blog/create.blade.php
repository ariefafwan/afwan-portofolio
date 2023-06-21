<!-- Modal Untuk Tambah Data -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form class="col-lg-12" action="{{ route('blog.store' ) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Judul Artikel.." autofocus required>
                    <label for="title">Judul</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" id="kategori_blog_id" name="kategori_blog_id" aria-label="Floating label select example" required>
                      <option selected>Pilih Kategori Artikel</option>
                      @foreach ($kategoriblog as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                      @endforeach
                    </select>
                    <label for="kategori_blog_id">Kategori Artikel</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="author" name="author" placeholder="Author Artikel.." required>
                    <label for="author">Author</label>
                </div>
                <div class="form-control mb-3">
                    <label for="text">Detail</label>
                    <textarea class="form-control summernote" placeholder="Artikel..." id="text" name="text" style="height: 300px" required></textarea>
                </div>
                <div class="form-control mb-3">
                    <label for="img">Upload Gambar</label>
                    <input class="form-control" type="file" id="img" name="img" required>
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