@extends('admin.app')

@section('body')
<hr>
<section class="content">
    <div class="btn-group mb-3">
        <a href="{{ route('project.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i>&nbspCREATE NEW
        </a>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="category-table" class="table table-light table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Judul Project</th>
                                <th class="text-center" style="width: 20%">Url</th>
                                <th class="text-center">Copyright</th>
                                <th class="text-center">Progres</th>
                                <th class="text-center">Guidebook</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($project as $index => $row)
                            <tr>
                                <td align="center" scope="row">{{ $index + 1 }}</td>
                                <td align="left">{{ $row->title }}</td>
                                <td align="justify">{{ $row->url }}</td>
                                <td align="center">{{ $row->author }} {{ $row->tahun }}</td>
                                <td align="center">{{ $row->progres }}</td>
                                <td align="center">
                                    <div class="d-flex justify-content-evenly">
                                    <a href="{{ route('project.show',$row->id) }}" class="btn btn-info">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{ route('project.edit',$row->id) }}" class="btn btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger"
                                        onclick="event.preventDefault();
                                                document.getElementById('project-delete-form-{{$row->id}}').submit();">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="project-delete-form-{{$row->id}}"
                                        action="{{ route('project.destroy',$row->id) }}" method="POST"
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