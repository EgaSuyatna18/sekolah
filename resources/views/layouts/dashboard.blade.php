<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <link href="/assets/sbadmin/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/">Home</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            @if (auth()->user()->role == 'admin')
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="/pendaftaran">
                                    <div class="sb-nav-link-icon"><i class="fas fa-paperclip"></i></div>
                                    Pendaftaran
                                </a>
                                <div class="sb-sidenav-menu-heading">Akademik</div>
                                <a class="nav-link" href="/mata_pelajaran">
                                    <div class="sb-nav-link-icon"><i class="fas fa-window-restore"></i></div>
                                    Mata Pelajaran
                                </a>
                                <a class="nav-link" href="/pendidik">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-user"></i></div>
                                    Pendidik
                                </a>
                                <a class="nav-link" href="/berita">
                                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                    Berita
                                </a>
                                <div class="sb-sidenav-menu-heading">Siswa</div>
                                <a class="nav-link" href="/siswa">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Siswa
                                </a>
                                <a class="nav-link" href="/kehadiran">
                                    <div class="sb-nav-link-icon"><i class="fas fa-clipboard-user"></i></div>
                                    Kehadiran
                                </a>
                                <a class="nav-link" href="/nilai">
                                    <div class="sb-nav-link-icon"><i class="fas fa-arrow-up-1-9"></i></div>
                                    Nilai
                                </a>
                                <a class="nav-link" href="/prestasi">
                                    <div class="sb-nav-link-icon"><i class="fas fa-trophy"></i></div>
                                    Prestasi
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">{{ $title }}</h1>
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/assets/sbadmin/scripts.js"></script>
        @include('layouts.toast')
    </body>
</html>