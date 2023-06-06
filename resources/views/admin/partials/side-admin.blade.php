<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link " href="{{ route('home') }}">
                    <i class="bi bi-laptop"></i>
                    <span class="ml-2">Dashboard</span>
                </a>
                <div class="sb-sidenav-menu-heading">Menu Admin</div>
                <a class="nav-link" href="{{ route('profile.index') }}">
                    <i class="bi bi-gear-wide-connected"></i>
                    <span class="ml-2">Profile</span>
                </a>
                <a class="nav-link" href="{{ route('project.index') }}">
                    <i class="bi bi-terminal"></i>
                    <span class="ml-2">Projects</span>
                </a>
                <a class="nav-link" href="{{ route('skill.index') }}">
                    <i class="bi bi-lamp-fill"></i>
                    <span class="ml-2">Skills</span>
                </a>
                {{-- <div class="sb-sidenav-menu-heading">Diagnosa</div>
                <a class="nav-link" href="{{ route('diagnosa.create') }}">
                    <i class="fa fa-search-plus" aria-hidden="true"></i>
                    <span class="ml-2">Diagnosa</span>
                </a> --}}
            </div>
        </div>
    </nav>
</div>