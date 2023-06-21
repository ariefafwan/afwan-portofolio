<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Home</div>
                <a class="nav-link " href="{{ route('home') }}">
                    <i class="bi bi-laptop"></i>
                    &nbspDashboard
                </a>
                <div class="sb-sidenav-menu-heading">Menu Admin</div>
                <a class="nav-link" href="{{ route('profile.index') }}">
                    <i class="bi bi-gear-wide-connected"></i>
                    &nbspProfile
                </a>
                <a class="nav-link" href="{{ route('project.index') }}">
                    <i class="bi bi-terminal"></i>
                    &nbspProjects
                </a>
                <a class="nav-link" href="{{ route('skill.index') }}">
                    <i class="bi bi-lamp-fill"></i>
                    &nbspSkills
                </a>
                <div class="sb-sidenav-menu-heading">Blog</div>
                <a class="nav-link" href="{{ route('kategori.index') }}">
                    <i class="bi bi-tags"></i>
                    &nbspKategori Blog
                </a>
                <a class="nav-link" href="{{ route('blog.index') }}">
                    <i class="bi bi-newspaper"></i>
                    &nbspBlog
                </a>
            </div>
        </div>
    </nav>
</div>