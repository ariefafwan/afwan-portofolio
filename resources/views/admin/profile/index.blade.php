@extends('admin.app')

@section('body')
<hr>
<section class="content">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-lg-12">
        <table class="table table-bordered table-hover">
          <tr>
            <td style="width: 20%">Full Name</td>
            <td>:</td>
            <td>{{ $profile[0]->fullname }}</td>
          </tr>
          <tr>
            <td>Nick Name</td>
            <td style="width: 2%">:</td>
            <td>{{ $profile[0]->nickname }}</td>
          </tr>
          <tr>
            <td>Work As</td>
            <td>:</td>
            <td>{!! $profile[0]->work_as !!}</td>
          </tr>
          <tr>
            <td>Description</td>
            <td>:</td>
            <td>{{ $profile[0]->desc }}</td>
          </tr>
          <tr>
            <td>About Me</td>
            <td>:</td>
            <td>{{ $profile[0]->about }}</td>
          </tr>
          <tr>
            <td>Resume</td>
            <td>:</td>
            <td>{{ $profile[0]->cv }}</td>
          </tr>
        </table>
        <a class="btn btn-warning me-3" href="{{ route('profile.edit', $profile[0]->id) }}">
            <i class="bi bi-pencil"></i>&nbspEdit</a>
      </div>
    </div>

</section>
@endsection