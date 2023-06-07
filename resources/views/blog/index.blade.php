@extends('layouts.head')

@section('welcome')
      <!-- Header-->
      <header class="py-5 mt-5">
        <div class="container py-5 mt-5">
          <div class="row gx-5 align-items-start">
            <div class="col">
              <!-- Header text content-->
              <div class="container px-4 px-lg-5 text-center">
                <h2 class="display-5 fw-bolder mb-2">
                    <span class="text-gradient d-inline">Will Come Back Soon</span>
                  </h2>
                <a class="btn btn-dark btn-lg" href="{{ route('welcome') }}"><i class="bi bi-house"></i>&nbspHome Page</a>
              </div>

            </div>
            </div>
          </div>
        </div>
      </header>

@endsection