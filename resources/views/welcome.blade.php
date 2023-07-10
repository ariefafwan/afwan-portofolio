@extends('layouts.head')

@section('css')
<link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" />
@endsection

@section('body')

@include('layouts.header')
    
    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-xxl-8">
              <div class="text-center">
                <header class="section-header">
                  <!-- <h2>Our Values</h2> -->
                  <p>About Me</p>
                </header>
                <div class="px-4">
                  <!-- Professional skills list-->
                  <p class="lead fw-light mb-4">{{ $profile[0]->about }}</p>
                  <a class="btn btn-primary mb-4" href="{{ asset('storage/profile/cv/'.$profile[0]->cv) }}">
                    <i class="bi bi-download"></i>
                    Download Resume
                  </a>
                  @foreach ($skill_kategori as $sk)
                    <div class="mb-5">
                      <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                          {!! $sk->icon_svg_bootstrap !!}
                        </div>
                        <h3 class="fw-bolder mb-0">
                          <span class="text-gradient d-inline">{{ $sk->skill_kategori }} Skills</span>
                        </h3>
                      </div>
                      <div class="row row-cols-1 row-cols-md-3 mb-4">
                        @foreach ($skill as $row)
                          @if($sk->id == $row->skill_kategori_id)
                          <div class="col mb-4">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{ $row->skills }}</div>
                          </div>
                          @endif
                        @endforeach
                      </div>
                    </div>
                  @endforeach
                  <div class="d-flex align-items-center mb-4">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                      <i class="bi bi-globe"></i>
                    </div>
                    <h3 class="fw-bolder mb-0">
                      <span class="text-gradient d-inline">Social Media</span>
                    </h3>
                  </div>
                  <div class="d-flex justify-content-center fs-2 gap-4">
                    <a class="text-gradient" target="_blank" href="https://www.instagram.com/ariefafwann/">
                      <i class="bi bi-instagram"></i>
                    </a>
                    <a class="text-gradient" target="_blank" href="https://twitter.com/ariefafwann_">
                      <i class="bi bi-twitter"></i>
                    </a>
                    <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/teuku-m-arief-afwan/">
                      <i class="bi bi-linkedin"></i>
                    </a>
                    <a class="text-gradient" target="_blank" href="https://github.com/ariefafwan">
                      <i class="bi bi-github"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->
      @include('layouts.contact')
    </main>
@endsection

@section('js')
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
  $(document).ready(function(){
    $(".close").click(function(){
      $("#myAlert").alert("close");
    });
  });
</script>
@endsection