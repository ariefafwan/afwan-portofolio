@extends('admin.app')

@section('body')

<hr>
<section class="content">
  <!-- Portfolio Item Row -->
  <div class="row">
  
    <div class="col-md-8">
      <img class="img-fluid" src="{{ asset('storage/project/img/'.$project->img) }}" alt="{{ $project->title }}">
    </div>

    <div class="col-md-4">
        <h3 class="my-3">Project Description</h3>
        <p>{!! $project->detail !!}</p>
        <p>Made By {{ $project->author }} {{ $project->tahun }}</p>
        <h3 class="my-3">Other Details</h3>
        <table class="table table-bordered">
            <tr>
                <td style="width: 20%">Progress</td>
                <td>:</td>
                <td>{{ $project->progres }}</td>
            </tr>
            <tr>
                <td style="width: 20%">Url</td>
                <td>:</td>
                <td>
                    <a href="{!! $project->url !!}" style="text-decoration: none">Klik Disini</a>
                </td>
            </tr>
            <tr>
                <td style="width: 20%">Guidebook</td>
                <td>:</td>
                <td>
                    <a class="btn btn-primary" href="{{ asset('storage/project/guidebook/'.$project->guidebook) }}">
                        <i class="bi bi-download"></i>
                    </a>    
                </td>
            </tr>
        </table>
    </div>

  </div>
  <!-- /.row -->
</section>
@endsection