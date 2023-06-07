@extends('admin.app')

@section('body')

<div class="form-create-penyakit col-lg-12 shadow-lg rounded p-3">
    <a href="{{ route('profile.index') }}" class="btn btn-danger my-3">
        <i class="bi bi-arrow-left"></i>&nbspBack
    </a>
    <form class="col-lg-12" action="{{ route('profile.update', $profile->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label fw-bold">Full Name</label>
            <input type="text" class="form-control" id="fullname" value="{{ old('fullname', $profile->fullname) }}" name="fullname" autofocus>
        </div>
        <div class="mb-3">
            <label for="nickname" class="form-label fw-bold">Nickname</label>
            <input type="text" class="form-control" value="{{ old('nickname', $profile->nickname) }}" id="nickname" name="nickname">
        </div>
        <div class="mb-3">
            <label for="work_as" class="form-label fw-bold">Work As</label>
            <input type="text" class="form-control" id="work_as" value="{{ old('work_as', $profile->WorkName) }}" name="work_as">
        </div>
        <div class="mb-3">
            <label for="about" class="form-label fw-bold">About</label>
            <input type="text" class="form-control" id="about" value="{{ old('about', $profile->about) }}" name="about">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label fw-bold">Description</label>
            <textarea class="form-control" id="desc" name="desc" rows="3">{{ old('desc', $profile->desc) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label fw-bold">Upload CV</label>
            <input class="form-control" type="file" id="cv" name="cv">
        </div>
        <div class="button d-flex justify-content-center">
            <button type="submit" class="btn btn-warning">
                <i class="bi bi-database-add"></i>&nbspSubmit
            </button>
        </div>
    </form>
</div>

@endsection