@extends('admin.app')

@section('body')
<div class="form-create-penyakit col-lg-12 shadow-lg rounded p-3">
    <a href="{{ route('project.index') }}" class="btn btn-danger my-3">
        <i class="bi bi-arrow-left"></i>&nbspBack
    </a>
    <form class="col-lg-12" action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan Title Project">
            <label for="title">Title</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="url" class="form-control" id="url" placeholder="Masukkan Url Project">
            <label for="url">Url Address Project</label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" name="tahun" class="form-control" id="tahun" placeholder="Tahun Project" pattern="[0-9]{4}">
            <label for="tahun">Tahun Project</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" name="author" class="form-control" id="author" placeholder="Masukkan Author Project">
            <label for="author">Author Project</label>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="progres" name="progres">
                <option selected value="Develepment">Develepment</option>
                <option value="Production">Production</option>
                <option value="Maintenance">Maintenance</option>
            </select>
            <label for="progres">Pilih Tipe Deployment</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" style="height: 100px" placeholder="Tambah Detail" name="detail" id="detail"></textarea>
            <label for="detail">Details</label>
        </div>
        <div class="form-control mb-3">
            <label for="img">Upload Gambar</label>
            <input class="form-control" type="file" id="img" name="img">
        </div>
        <div class="form-control mb-3">
            <label for="guidebook">Upload Guidebook</label>
            <input class="form-control" type="file" id="guidebook" name="guidebook">
        </div>
        <div class="button d-flex justify-content-center">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-database-add"></i>&nbspSubmit
            </button>
        </div>
    </form>
</div>
@endsection