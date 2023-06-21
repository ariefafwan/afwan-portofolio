@extends('admin.app')

@section('body')
<hr>
<section class="content">
    <div class="col-md-12 mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"><i class="bi bi-plus-circle"></i>&nbspTambah Artikel</button>
        @include('admin.blog.create')
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Judul Artikel</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Author</th>
                                <th class="text-center">Tanggal Publish</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $index => $row)
                            <tr>
                                <th align="center" scope="row">{{ $index + 1 }}</th>
                                <td align="left">{{ $row->title }}</td>
                                <td align="justify">{{ $row->kategori_blog->name }}</td>
                                <td align="center">{{ $row->author }}</td>
                                <td align="center">{{ $row->created_at->format('d-m-Y') }}</td>
                                <td align="center">
                                    <div class="d-flex justify-content-evenly">
                                    <a href="{{ route('blog.show',$row->id) }}" class="btn btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('blog.edit',$row->id) }}" class="btn btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger"
                                        onclick="event.preventDefault();
                                                document.getElementById('blog-delete-form-{{$row->id}}').submit();">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="blog-delete-form-{{$row->id}}"
                                        action="{{ route('blog.destroy',$row->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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