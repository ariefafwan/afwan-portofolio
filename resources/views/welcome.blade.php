@extends('layouts.head')

@section('welcome')
      <!-- Header-->
      <header class="py-5 mt-5">
        <div class="container py-5 mt-5">
          <div class="row gx-5 align-items-start">
            <div class="col">
              <!-- Header text content-->
              <div class="text-left text-xxl-start">
                <div>
                  <h1 class="display-2 fw-bolder text-gradient d-inline">Hi!, I'm {{ $profile[0]->nickname }}</h1>
                </div>
                <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                  <div class="text-uppercase">{!! $profile[0]->work_as !!}</div>
                </div>
                <p class="mb-4 fw-medium">
                  <span class="text-muted">{{ $profile[0]->desc }}</span>
                </p>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-left justify-content-xxl-start mb-3">
                  <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">BLOG</a>
                  <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a>
                </div>
              </div>
            </div>
            <div class="col img d-flex justify-content-center">
                <img class="profile-img" src="{{ asset ('assets/img/profile.png') }}" alt="..." />
            </div>
          </div>
        </div>
      </header>
      <!-- About Section-->
      <section class="py-4" id="about">
        <div class="container px-3">
          <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
              <div class="text-center my-4">
                <h2 class="display-5 fw-bolder">
                  <span class="text-gradient d-inline">About Me</span>
                </h2>
                <div class="card shadow border-0 rounded-4 mb-1">
                  <div class="card-body p-5">
                    <!-- Professional skills list-->
                    <p class="lead fw-light mb-4">{{ $profile[0]->about }}</p>
                    <a class="btn btn-primary bg-gradient-primary-to-secondary d-inline-block mb-4" href="{{ asset('storage/resume/'.$profile[0]->cv) }}">
                      <i class="bi bi-download"></i>
                      Download My Resume
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
                      <a class="text-gradient" target="_blank" href="https://www.linkedin.com/in/teuku-m-arief-afwan-219987272/">
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
        </div>
      </section>
      <section class="py-5 bg-gradient-primary-to-secondary text-white" id="contact">
        <div class="container px-3">
          <div class="row gx-5 justify-content-center text-center">
            <div class="col-xxl-8">
              <div class="rounded-4 px-4 px-md-5">
                <h1 class="text-center mb-4 fw-bolder text-white">Contact Me</h1>
                <div class="card shadow border-0 rounded-4 mb-2">
                  <div class="card-body p-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible alert-dismissible" role="alert" id="myAlert">
                          <strong>Hai!</strong> {{ session('success') }}
                          <button type="button" class="close btn btn-outline-secondary btn-sm" data-dismiss="alert" aria-label="close">
                            &times;
                          </button>
                        </div>
                    @endif
                    <div class="row gx-5 justify-content-center">
                      <p class="lead fw-normal text-muted text-center mb-2">Let's work together!</p>
                      <form action="{{ route('contactme') }}" class="w-full">
                          @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                          <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                          <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                          <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
                          <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                          <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
                          <label for="phone">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                          <textarea class="form-control" id="message" name="comment" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                          <label for="message">Message</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                          <button class="btn bg-gradient-primary-to-secondary btn-lg text-white" id="submitButton" type="submit">Submit</button>
                        </div>
                      </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection