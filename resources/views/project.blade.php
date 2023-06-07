@extends('layouts.head')

@section('welcome')
      <section class="py-5 mt-5">
        <div class="container px-5 mt-5">
            <div class="row gx-5 justify-content-center">
              <div class="col-xxl-8">
                <div class="row">
                    <h2 class="display-5 fw-bolder text-center mb-4">
                        <span class="text-gradient d-inline">My Project</span>
                    </h2>
                    @if ($data->count() > 0)
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($data as $row)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card h-100">
                            <a href="{{ route('detailproject', $row->id) }}">
                                <img class="card-img-top" src="{{ asset('storage/project/img/'.$row->img) }}" alt="">
                            </a>
                            <div class="card-body">
                                <div class="text-muted">
                                    <h6>Author : {{ $row->author }}, {{ $row->tahun }}</h6>
                                </div>
                                <h4 class="card-title">
                                    <a class="text-dark" href="{{ route('detailproject', $row->id) }}">{{ $row->title }}</a>
                                </h4>
                                <p class="card-text">{{ Str::limit(strip_tags($row->detail),50) }}...</p>
                            </div>
                        </div>
                    </div>
                    @if ($i % 9 == 0)
                    <div class="clearfix visible-md visible-lg"></div>
                    @endif
                    @php
                    $i++;
                    @endphp
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {{-- {{ $news->links() }} --}}
                    </div>
                    @else
                    Not Found .....
                    @endif
                </div>
              </div>
            </div>
        </div>
      </section>
@endsection