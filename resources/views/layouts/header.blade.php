<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 class="display-2 fw-bolder text-gradient d-inline" data-aos="fade-up">Hi! I'm {{ $profile[0]->nickname }}</h1>
          <div data-aos="fade-up" data-aos-delay="400">
            <span class="badge bg-gradient-primary-to-secondary mb-4">
              <div class="text-uppercase">{!! $profile[0]->work_as !!}</div>
            </span>
          </div>
          <p class="text-muted fw-semibold" data-aos="fade-up" data-aos-delay="400">
            <span>{{ $profile[0]->desc }}</span>
          </p>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a class="btn btn-primary scrollto btn-lg px-4 py-sm-3 align-self-center fs-6 fw-bolder" href="#about">About</a>
              <a class="btn btn-outline-primary scrollto btn-lg px-4 py-sm-3 align-self-center fs-6 fw-bolder" href="#">Projects</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/profile.png" width="350px" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->