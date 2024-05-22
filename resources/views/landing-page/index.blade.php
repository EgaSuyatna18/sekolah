<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ $title }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/quickstart/img/favicon.png" rel="icon">
  <link href="/assets/quickstart/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/quickstart/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/quickstart/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/quickstart/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/quickstart/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/quickstart/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/quickstart/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: May 10 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="/assets/quickstart/img/logo.png" alt="">
        <h1 class="sitename">{{ $title }}</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/#hero" class="">Home</a></li>
          <li><a href="/#misi">Misi</a></li>
          <li><a href="/#informasi">Informasi</a></li>
          <li><a href="/#berita">Berita</a></li>
          <li><a href="/#galeri">Galeri</a></li>
          <li><a href="/#faq">FAQ</a></li>
          <li><a href="/#daftar">Daftar</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @if (auth()->check())
        <a class="btn-getstarted" href="/dashboard">Dashboard</a>
      @else
        <a class="btn-getstarted" href="/login">Login</a>
      @endif

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="/assets/quickstart/img/hero-bg-light.webp" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up" class="">Website <span>{{ $title }}</span></h1>
          <p data-aos="fade-up" data-aos-delay="100" class="">UNGGUL DALAM BIDANG AKADEMIK DAN NON AKADEMIK, BERIMAN, <br>BERBUDAYA DAN BERBUDI PEKERTI LUHUR DALAM PERILAKU<br></p>
          <img src="/assets/quickstart/img/hero-services-img.webp" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="misi" class="featured-services section">

      <div class="container">

        <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">MISI</h2>
      </div><!-- End Section Title -->

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-1-square"></i></div>
              <div>
                <p class="description">Memacu siswa untuk berprestasi dalam bidang akademik dan non akademik minimal sampai tingkat kecamatan.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-2-square"></i></div>
              <div>
                <p class="description">Mewujudkan sumber daya pendidik dan kependidikan yang profesional.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-3-square"></i></div>
              <div>
                <p class="description">Mewujudkan standar kelulusan dengan nilai minimal 75% sesuai dengan SNP.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-4-square"></i></div>
              <div>
                <p class="description">Mewujudkan proses pembelajaran paikem, inovatif, dan kontekstual.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-5-square"></i></div>
              <div>
                <p class="description">Meningkatkan kemampuan guru, pegawai, dan siswa dalam penggunaan bahasa asing (Bahasa Inggris).</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-6-square"></i></div>
              <div>
                <p class="description">Mewujudkan sarana dan prasarana belajar yang lengkap dan memadai sesuai dengan kebutuhan.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-7-square"></i></div>
              <div>
                <p class="description">Mewujudkan manajemen sekolah yang transparan dan accuntabel.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-8-square"></i></div>
              <div>
                <p class="description">Mewujudkan standar biaya yang memadai dan terpenuhi.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-9-square"></i></div>
              <div>
                <p class="description">Mewujudkan sistem penilaian yang berkualitas dan akurat.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-1-square"></i><i class="bi bi-0-square"></i></div>
              <div>
                <p class="description">Membiasakan warga sekolah untuk melaksanakan 5 S (Senyum, Salam, Sapa, Sopan dan Santun).</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-1-square"></i><i class="bi bi-1-square"></i></div>
              <div>
                <p class="description">Menciptakan suasana kerja yang harmonis berdasarkan indikator budaya sekolah yaitu kedisiplinan, partisipasi, tanggung jawab, kebersamaan, kejujuran, kekeluargaan, semangat hidup dan semangat belajar.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-1-square"></i><i class="bi bi-2-square"></i></div>
              <div>
                <p class="description">Menanamkan sikap saling menghormati di antara warga sekolah.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-1-square"></i><i class="bi bi-3-square"></i></div>
              <div>
                <p class="description">Membiasakan peserta didik menjaga kebersihan lingkungan untuk mendukung program clean and green.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="informasi" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Siapa Kami?</p>
            <h3>Informasi singkat tentang sekolah</h3>
            <p class="fst-italic">
                SD Negeri 1 Poka merupakan sekolah negeri di Kota Ambon, Maluku. Didirikan pada tanggal 01 Januari 1910, sekolah ini berlokasi di Jln.Ir.M.Putuhena, Poka, Kec. Teluk Ambon, Kota Ambon, Maluku. NPSN (Nomor Pokok Sekolah Nasional) sekolah ini adalah 60102118.
                SD Negeri 1 Poka menyelenggarakan kegiatan belajar selama double shift setiap hari, dengan durasi kegiatan belajar selama 6 hari dalam seminggu. Sekolah ini memiliki legalitas operasional dan telah memperoleh sertifikat ISO, meskipun nomor sertifikatnya tidak disebutkan. Profil sekolah ini mencakup luas tanah sekitar 3 meter persegi, memiliki akses internet, dan sumber listrik berasal dari PLN. Anda juga dapat menghubungi sekolah melalui email di sdnpoka1@gmail.com 
            </p>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="/assets/quickstart/img/about-company-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="/assets/quickstart/img/about-company-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="/assets/quickstart/img/about-company-3.jpg" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!--Section: News of the day-->
    <section id="berita" class="section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        @foreach ($beritas as $berita)
            
          <div class="row gx-5">
            <div class="col-md-6 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="/storage/{{ $berita->foto }}" alt="errorIMG" class="img-fluid w-100 h-100" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 mb-4">
              <h4><strong>{{ $berita->judul }}</strong></h4>
              <p class="text-muted">
                {{ $berita->isi }}
              </p>
            </div>
          </div>

        @endforeach

        <div class="d-flex justify-content-center">
          {{ $beritas->fragment('berita')->links() }}
        </div>

      </div>
    </section>

    <!--Section: News of the day-->

    <!-- Features Section -->
    <section id="galeri" class="features section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">Galeri</h2>
      </div><!-- End Section Title -->

      <!-- Gallery -->
        <div class="row w-75 m-auto" data-aos="fade-up">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <img
                src="/assets/quickstart/img/galeri/landscape1.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
            />
        
            <img
                src="/assets/quickstart/img/galeri/potrait1.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Wintry Mountain Landscape"
            />
            </div>
        
            <div class="col-lg-4 mb-4 mb-lg-0">
            <img
                src="/assets/quickstart/img/galeri/potrait2.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Mountains in the Clouds"
            />
        
            <img
                src="/assets/quickstart/img/galeri/landscape2.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Boat on Calm Water"
            />
            </div>
        
            <div class="col-lg-4 mb-4 mb-lg-0">
            <img
                src="/assets/quickstart/img/galeri/landscape3.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Waves at Sea"
            />
        
            <img
                src="/assets/quickstart/img/galeri/potrait3.jpg"
                class="w-100 shadow-1-strong rounded mb-4"
                alt="Yosemite National Park"
            />
            </div>
        </div>
        <!-- Gallery -->

    </section><!-- /Features Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item">
                <h3>Di mana alamat SD Negeri 1 Poka?</h3>
                <div class="faq-content">
                  <p>SD Negeri 1 Poka beralamat lengkap di Jln.ir.m.putuhena, Kota Ambon, Prov. Maluku.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Apa akreditasi SD Negeri 1 Poka?</h3>
                <div class="faq-content">
                  <p>SD Negeri 1 Poka mendapatkan status akreditasi C dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Siapa nama kepala sekolah SD Negeri 1 Poka?</h3>
                <div class="faq-content">
                  <p>SD Negeri 1 Poka dipimpin oleh kepala sekolah bernama Burhan Sangadji.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Berapa biaya masuk SD Negeri 1 Poka?</h3>
                <div class="faq-content">
                  <p>Untuk informasi biaya masuk SD Negeri 1 Poka Anda bisa langsung menghubungi pihak sekolah.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Kapan SD Negeri 1 Poka pertama kali dibuka?</h3>
                <div class="faq-content">
                  <p>Jika merunut pada SK Operasional sekolah, SD Negeri 1 Poka didirikan sejak 01 January 1910.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="daftar" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pendaftaran</h2>
        <p>Form pendaftaran calon siswa</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat Kami</h3>
              <p>Jln.Ir.M.Putuhena, POKA, Kec. Teluk Ambon, Kota Ambon, Maluku, 97233</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>No Telepon Kami</h3>
              <p>+62 8128 9112 565</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Kami</h3>
              <p>sdnpoka1@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1990.8634706643209!2d128.19125186668822!3d-3.6496041843153204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6ceed687d2f471%3A0xc3ca3896eacec160!2sSD%20N%201%2C2%20%26%203%20POKA!5e0!3m2!1sid!2sid!4v1716284992930!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="/pendaftaran" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400" enctype="multipart/form-data">
              @csrf
              <div class="row gy-4">

                <div class="col-md-12">
                  <label class="mb-2">Nama Lengkap Calon Siswa</label>
                  <input type="text" name="nama_calon_siswa" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">Jenis Kelamin</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="Laki-laki" value="laki-laki" required>
                    <label class="form-check-label" for="Laki-laki">Laki-laki</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                  </div>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">Tempat & Tanggal Lahir</label><br>
                  <div class="row">
                    <div class="col-5"><input type="text" name="tempat_lahir" class="form-control" required></div>
                    <div class="col-2 text-center">-</div>
                    <div class="col-5"><input type="date" name="tanggal_lahir" class="form-control" required></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">Alamat</label>
                  <textarea name="alamat" class="form-control" required></textarea>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">No Telepon</label>
                  <input type="number" name="no_telepon" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">Email (optional)</label>
                  <input type="email" name="email" class="form-control">
                </div>

                <div class="col-md-12">
                  <label class="mb-2">Nama Lengkap Orangtua / Wali</label>
                  <input type="text" name="nama_wali" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">No Telepon Orangtua Wali</label>
                  <input type="number" name="no_telepon_wali" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">Akta Kelahiran Calon Siswa</label>
                  <input type="file" name="akta_kelahiran" class="form-control" required>
                </div>

                <div class="col-md-12">
                  <label class="mb-2">Kartu Keluarga Calon Siswa</label>
                  <input type="file" name="kartu_keluarga" class="form-control" required>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit">Daftar</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">QuickStart</span>
          </a>
          <div class="footer-contact pt-3">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">QuickStart</strong><span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/quickstart/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/quickstart/vendor/aos/aos.js"></script>
  <script src="/assets/quickstart/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/quickstart/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/quickstart/js/main.js"></script>

  @include('layouts.toast')
</body>

</html>