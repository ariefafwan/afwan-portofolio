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
                    <!-- Project -->
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($project as $row)
                    <li class="footer__list-item">
                        <a href="" class="footer__list-link">{{ $row->title }}</a>
                    </li>
                    @if ($i % 4 == 0)
                        <div class="clearfix visible-md visible-lg"></div>
                    @endif
                    @php
                        $i++;
                    @endphp
                    @endforeach
                    <!-- Project -->
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
            <span class="copyright">Copyright &copy; {{ $profile[0]->fullname }} 2023</span>
        </div>
    </div>
    </footer>