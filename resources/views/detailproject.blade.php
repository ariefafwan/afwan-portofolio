@extends('layouts.head')

@section('welcome')
      <section class="py-5 mt-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
              <div class="col-xxl-8">
                <div class="row">
                    <div class="card shadow border-0 rounded-4 mb-1">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <img class="img-fluid rounded-3" src="{{ asset('storage/project/img/'.$data->img) }}" alt="{{ $data->title }}">
                                </div>
                                <div class="col-md-4">
                                    <h3 class="my-3">Project Description</h3>
                                    <p>{!! $data->detail !!}</p>
                                    <p>Made By {{ $data->author }} {{ $data->tahun }}</p>
                                    <h3 class="my-3">Other Details</h3>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td style="width: 20%">Progress</td>
                                            <td>:</td>
                                            <td>{{ $data->progres }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20%">Url</td>
                                            <td>:</td>
                                            <td>
                                                <a href="{!! $data->url !!}" style="text-decoration: none">Klik Disini</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 20%">Guidebook</td>
                                            <td>:</td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ asset('storage/project/guidebook/'.$data->guidebook) }}">
                                                    <i class="bi bi-download"></i>
                                                </a>    
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
      </section>
@endsection