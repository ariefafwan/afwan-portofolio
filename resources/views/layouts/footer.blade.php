<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="px-4">
          <div class="row gy-4">
            <div class="col-lg-4 col-6 footer-links">
              <div class="d-flex mb-2">
                <div class="footer__logo bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2">
                  <i class="bi bi-newspaper"></i>
                </div>
                <h5>Artikel Terbaru</h5>
              </div>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-6 footer-links">
              <div class="d-flex mb-2">
                <div class="footer__logo bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2">
                  <i class="bi bi-terminal"></i>
                </div>
                <h5>Project Terbaru</h5>
              </div>
              <ul>
                <!-- Project -->
                @php
                $i = 1;
                @endphp
                @foreach ($project as $row)
                <li>
                    <a href="{{ url($row->url) }}">{{ $row->title }}</a>
                </li>
                @if ($i % 4 == 0)
                    <div class="clearfix visible-md visible-lg"></div>
                @endif
                @php
                    $i++;
                @endphp
                @endforeach
                <!-- Project -->
                {{-- <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Product Management</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Graphic Design</a></li> --}}
              </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
              <div class="d-flex mb-2">
                <div class="footer__logo bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2">
                  <i class="bi bi-cup-hot-fill"></i>
                </div>
                <h5>Traktir Saya Kopi</h5>
              </div>
              <!-- <h4>Traktir Saya Kopi</h4> -->
              <a href="https://www.nihbuatjajan.com/ariefafwan" target="_blank">
                <img src="https://d4xyvrfd64gfm.cloudfront.net/buttons/default-cta.png" alt="Nih buat jajan" style="height: 51px !important" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">Copyright &copy;<span>&nbspTeuku M Arief Afwan</span></div>
    </div>
  </footer>
  <!-- End Footer -->