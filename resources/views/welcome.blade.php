<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Afwan" />
    <title>Arief Afwan</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset ('favicon/favicon.ico') }}" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- Core theme CSS & Bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
  </head>
  <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: aliceblue">
        <div class="container px-3">
          <a class="navbar-brand fw-bolder text-primary text-gradient" href="index.html">
            <img src="{{ asset ('assets/img/logo.png') }}" alt="Logo" width="30" height="40" class="align-text-top" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcontent" aria-controls="navbarcontent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarcontent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small">
              <li class="nav-item">
                <a class="nav-link fw-bolder text-primary" href="index.html">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder text-primary" href="#about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder text-primary" href="resume.html">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder text-primary" href="projects.html">PROJECTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bolder text-primary" href="#contact">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Header-->
      <header class="py-5 mt-5">
        <div class="container py-5 mt-5">
          <div class="row gx-5 align-items-start">
            <div class="col">
              <!-- Header text content-->
              <div class="text-left text-xxl-start">
                <div>
                  <h1 class="display-2 fw-bolder text-gradient d-inline">Hi!, I'm Afwan</h1>
                </div>
                <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                  <div class="text-uppercase">Web Developer &middot; Designer &middot; Data Engginer</div>
                </div>
                <p class="mb-4 fw-medium">
                  <span class="text-muted">Fresh Graduate</span>
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
                    <p class="lead fw-light mb-4">Fullstack Web Developer. Laravel Enthusiast. Since 2019</p>
                    <a class="btn btn-primary bg-gradient-primary-to-secondary d-inline-block mb-4" href="#!">
                      <i class="bi bi-download"></i>
                      Download Resume
                    </a>
                    <div class="mb-5">
                      <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                          <i class="bi bi-tools"></i>
                        </div>
                        <h3 class="fw-bolder mb-0">
                          <span class="text-gradient d-inline">Professional Skills</span>
                        </h3>
                      </div>
                      <div class="row row-cols-1 row-cols-md-3 mb-4">
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">SEO/SEM Marketing</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Statistical Analysis</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development</div>
                        </div>
                      </div>
                      <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Adobe Software Suite</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface Design</div>
                        </div>
                      </div>
                    </div>
                    <!-- Languages list-->
                    <div class="mb-5">
                      <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                          <i class="bi bi-code-slash"></i>
                        </div>
                        <h3 class="fw-bolder mb-0">
                          <span class="text-gradient d-inline">Languages Skills</span>
                        </h3>
                      </div>
                      <div class="row row-cols-1 row-cols-md-3 mb-4">
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div>
                        </div>
                        <div class="col">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div>
                        </div>
                      </div>
                      <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div>
                        </div>
                        <div class="col">
                          <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div>
                        </div>
                      </div>
                    </div>
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
                    <div class="row gx-5 justify-content-center">
                      <p class="lead fw-normal text-muted text-center mb-2">Let's work together!</p>
                      <form id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                          <input class="form-control" id="name" type="text" placeholder="Enter your name..." required />
                          <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                          <input class="form-control" id="email" type="email" placeholder="name@example.com" required />
                          <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                          <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" required />
                          <label for="phone">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                          <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
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
    </main>
    <!-- Footer-->
    <footer class="footer">
        <div class="footer__container p-5">
            <div class="footer__top">
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="footer__logo bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2">
                            <i class="bi bi-newspaper"></i>
                        </div>
                        <h5 class="footer_title mt-2">
                            Artikel Terbaru
                        </h5>
                    </div>
                    {{-- <div class="footer__logo bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                        <i class="bi bi-newspaper"></i>
                    </div>
                    <h6 class="footer_title">
                        Afwan
                    </h6> --}}
                    <ul class="footer__list">
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Laravel</a>
                        </li>
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Git</a>
                        </li>
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Pojok</a>
                        </li>
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Ntah</a>
                        </li>
                        <!-- more -->
                    </ul>
                </div>
                {{-- repeat wrapper --}}
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="footer__logo bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2">
                            <i class="bi bi-terminal"></i>
                        </div>
                        <h5 class="footer_title mt-2">
                            Project Terbaru
                        </h5>
                    </div>
                    <ul class="footer__list">
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Laravel</a>
                        </li>
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Git</a>
                        </li>
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Pojok</a>
                        </li>
                        <li class="footer__list-item">
                            <a href="" class="footer__list-link">Ntah</a>
                        </li>
                        {{-- MORE --}}
                    </ul>
                </div>
                {{-- repeat wrapper --}}
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="footer__logo bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2">
                            <i class="bi bi-cup-hot-fill"></i>
                        </div>
                        <h5 class="footer_title mt-2">
                            Traktir Saya Kopi
                        </h5>
                    </div>
                    <ul>
                        <li>
                            <a href="https://www.nihbuatjajan.com/ariefafwan" target="_blank">
                                <img src="https://d4xyvrfd64gfm.cloudfront.net/buttons/default-cta.png" alt="Nih buat jajan" style="height: 51px !important;" >
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- repeat wrapper --}}
            </div>
            <hr class="footer__divider">
            <div class="footer__bottom">
                <span class="copyright">Copyright &copy; Afwan 2023</span>
            </div>
        </div>
        </footer>
    {{-- <footer class="bg-white mt-auto text-center text-lg-start text-dark">
      <div class="container px-5">
        <section class="row gx-5 justify-content-center py-5">
            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <i class="fas fa-gem me-3 text-secondary"></i>
                  Company name
                </h6>
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                <p>
                  <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Laravel</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Useful links</h6>
                <p>
                  <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                  <a href="#!" class="text-reset">Help</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p>
                  <i class="fas fa-home me-3 text-secondary"></i> 
                  New York, NY 10012, US</p>
                <p>
                  <i class="fas fa-envelope me-3 text-secondary"></i>
                  info@example.com
                </p>
                <p>
                  <i class="fas fa-phone me-3 text-secondary"></i>
                   + 01 234 567 88</p>
                <p>
                  <i class="fas fa-print me-3 text-secondary"></i>
                   + 01 234 567 89</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
            <div class="row align-items-center justify-content-center flex-column flex-sm-row mt-3">
              <div class="col-auto">
                <div class="small m-0">Copyright &copy; Afwan 2023</div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </footer> --}}
    <!-- Footer -->
    <!-- Bootstrap core JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <!-- Core theme JS-->
    <script src="{{ asset ('assets/js/scripts.js') }}"></script>
  </body>
</html>
