@extends('admin.app')

@section('body')
<hr>
<section class="content">
    <div class="btn-group mb-3">
        <div class="col-md-12">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#showmodal"><i class="bi bi-eye"></i>&nbspLihat Daftar Kategori Skills</button>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addModal"><i class="bi bi-plus-circle"></i>&nbspTambah Kategori Skills</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahskill"><i class="bi bi-plus"></i>&nbspTambah Skills</button>
                @include('admin.skill.skills.create')
                @include('admin.skill.skills.edit')
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Skill Kategori</th>
                                <th class="text-center">Skill Name</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skil as $index => $row)
                            <tr>
                                <td align="center" scope="row">{{ $index + 1 }}</td>                                
                                <td align="left">{{ $row->skill_kategori->skill_kategori }}</td>
                                <td align="left">{{ $row->skills }}</td>
                                <td>
                                    <div class="d-flex justify-content-evenly">
                                    <button type="button" class="btn btn-info edit" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="{{ $row->id }}"><i class="bi bi-pencil"></i></button>
                                    <a href="javascript:void(0)" class="btn btn-danger"
                                        onclick="event.preventDefault();
                                                document.getElementById('skill-delete-form-{{$row->id}}').submit();">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="skill-delete-form-{{$row->id}}"
                                        action="{{ route('skill.destroy',$row->id) }}" method="POST"
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
    @include('admin.skill.create')
    @include('admin.skill.show')
</section>
@endsection
@section('js')
<script>
    $(document).ready(function() {
    //edit data
    $('.edit').on("click",function() {
    var id = $(this).attr('data-id');
    $.ajax({
    url: '/editmyskill/'+id,
    type: "GET",
    dataType: "JSON",
    success: function(data)
    {
        $('#editid').val(data.id);
        $('#skillname').val(data.skills);
        $('#kategori').val(data.skill_kategori_id);
        $('#editskill').modal('show');
    }
    });
    });
    });
</script>
@endsection