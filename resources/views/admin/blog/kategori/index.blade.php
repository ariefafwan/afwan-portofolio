@extends('admin.app')

@section('body')
<hr>
<section class="content">
    <div class="col-md-8 mb-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata"><i class="bi bi-plus-lg"></i>&nbspTambah Data</button>
        @include('admin.blog.kategori.create')
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Slug</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $index => $row)
                            <tr>
                                <td align="center" scope="row">{{ $index + 1 }}</td>
                                <td align="left">{{ $row->name }}</td>
                                <td align="justify">{{ $row->slug }}</td>
                                <td align="center">
                                    <div class="d-flex justify-content-evenly">
                                        <button type="button" class="btn btn-info edit" data-bs-toggle="modal" data-bs-target="#editkategori" data-id="{{ $row->id }}"><i class="bi bi-pencil"></i></button>
                                    <a href="javascript:void(0)" class="btn btn-danger"
                                        onclick="event.preventDefault();
                                                document.getElementById('kategori-delete-form-{{$row->id}}').submit();">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="kategori-delete-form-{{$row->id}}"
                                        action="{{ route('kategori.destroy',$row->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @include('admin.blog.kategori.edit')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script>
    $(document).ready(function() {
    //edit data
    $('.edit').on("click",function() {
    var id = $(this).attr('data-id');
    $.ajax({
    url: '/editkategori/'+id,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
        $('#editid').val(data.id);
        $('#kategoriname').val(data.name);
        $('#editkategori').modal('show');
    }
    });
    });
    });
</script>
@endsection