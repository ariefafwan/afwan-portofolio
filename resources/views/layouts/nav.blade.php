<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo.png') }}" alt="" />
        <span>Arief Afwan</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto @if(Route::is('welcome')) active @endif" href="{{ route('welcome') }}">Home</a></li>
          @if (Route::is('welcome'))
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          @else
          <li><a class="nav-link scrollto" href="{{ route('welcome') }}">About</a></li>
          @endif
          <li><a class="nav-link scrollto  @if(Route::is('blog')) active @endif" href="{{ route('blog') }}">Blog</a></li>
          <li><a class="nav-link scrollto" href="{{ route('myproject') }}">Project</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->