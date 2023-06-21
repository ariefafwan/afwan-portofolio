@extends('admin.app')

@section('body')
<hr>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <form class="col-lg-12" action="{{ route('blog.update', $blog->id ) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $blog->title) }}" placeholder="Judul Artikel.." required>
                            <label for="title">Judul</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="kategori_blog_id" name="kategori_blog_id" aria-label="Floating label select example" required>
                              <option value="{{ $blog->kategori_blog_id }}" selected>{{ $blog->kategori_blog->name }}</option>
                              @foreach ($kategoriblog as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                            <label for="kategori_blog_id">Kategori Artikel</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $blog->author) }}" placeholder="Author Artikel.." required>
                            <label for="author">Author</label>
                        </div>
                        <div class="form-control mb-3">
                            <label for="text">Detail</label>
                            <textarea class="form-control summernote" placeholder="Artikel..." id="text" name="text" style="height: 300px" required>{{ $blog->text }}</textarea>
                        </div>
                        <div class="form-control mb-3">
                            <label for="img">Upload Gambar</label>
                            <input type="hidden" name="oldImage" value="{{ $blog->img }}">
                            <input class="form-control" type="file" id="img" name="img" required>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ route('blog.index') }}" class="btn btn-danger">
                                <i class="bi bi-arrow-left"></i>&nbspBack
                            </a>
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-database-add"></i>&nbspUpdate
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
    $('.summernote').summernote();
    });
</script>    
@endsection