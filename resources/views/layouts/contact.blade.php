  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <p>Contact Me</p>
      </header>
      @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible alert-dismissible" role="alert" id="myAlert">
            <strong>Hai!</strong> {{ session('success') }}
            <button type="button" class="close btn btn-outline-secondary btn-sm" data-dismiss="alert" aria-label="close">
              &times;
            </button>
          </div>
      @endif
      <div class="px-4">
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="row gy-4">
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Me</h3>
                  <p>tmariefafwan@gmail.com</p>
                </div>
              </div>
              <div class="col-md-8">
                <form action="{{ route('contactme') }}" class="form-contact" method="POST">
                  @csrf
                  <p class="lead fw-normal text-muted text-center mb-2">Let's work together!</p>
                  <div class="row gy-4">
                    {{-- <div class="col-md-6">
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                    </div> --}}
                    <div class="col-md-6">
                      <div class="form-floating">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." required />
                        <label for="name">Full name</label>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-floating">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                        <label for="email">Your Email</label>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-floating">
                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" required />
                        <label for="phone">Phone number</label>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-floating">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                        <label for="subject">Subject</label>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-floating">
                        <textarea class="form-control" id="message" name="comment" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                        <label for="message">Message</label>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button class="btn btn-primary" type="submit">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->