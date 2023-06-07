<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
    <div class="container px-3">
      <a class="navbar-brand fw-bolder text-primary text-gradient" href="{{ route('welcome') }}">
        <img src="{{ asset ('assets/img/log.png') }}" alt="Logo" width="30" height="40" class="align-text-top" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcontent" aria-controls="navbarcontent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarcontent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small">
          <li class="nav-item">
            <a class="nav-link fw-bolder text-dark" href="{{ route('welcome') }}">HOME</a>
          </li>
          <li class="nav-item">
            @if ($page === "Welcome")
            <a class="nav-link fw-bolder text-dark" href="#about">ABOUT</a>
            @else
            <a class="nav-link fw-bolder text-dark" href="{{ route('welcome') }}">ABOUT</a>
            @endif
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-dark" href="{{ route('blog') }}">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-dark" href="{{ route('myproject') }}">PROJECTS</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link fw-bolder text-primary" href="#contact">CONTACT</a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>