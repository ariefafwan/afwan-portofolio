@extends('layouts.head')

@section('css')
<link href="{{ asset('assets/css/index.css') }}" rel="stylesheet" />
@endsection

@section('body')
    
    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about my-5">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-xxl-8">
              <div class="text-center">
                <header class="section-header">
                  <!-- <h2>Our Values</h2> -->
                  <p>Artikel Terbaru</p>
                </header>
                <div class="px-4">
                  <a class="btn btn-primary btn-lg" href="{{ route('welcome') }}"><i class="bi bi-house"></i>&nbspHome Page</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->
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