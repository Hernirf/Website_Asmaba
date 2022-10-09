<?php
session_start();
if(!isset($_SESSION['userlogin'])){
  header("Location: ../sistem_login.php");
  exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website ASMABA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>ASMABA</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto " href="#portfolio">Dokumentasi</a></li>
            <!-- <li><a class="nav-link scrollto" href="#team">Kepengurusan 2021/2022</a></li> -->
            <li><a href="../logout.php">Logout</a></li>
            <li><a class="getstarted scrollto" href="#about">Kunjungi</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>SELAMAT DATANG</h1>
      <h2>Website Asrama Mahasiswa/i Balikpapan</h2>
      <a href="#about" class="btn-get-started scrollto">Kunjungi</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="section-title" data-aos="fade-left">
            <h2>About Us</h2>
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Asmaba adalah sebuah fasilitas tempat tinggal yang disediakan pemerinta Kota Balikpapan bagi Mahasiswa/i 
              asal Balikpapan yang menempuh pendidikan di Perguruan Tinggi
              Samarinda, yang terdiri dari Asrama Putri dan Asrama Putra.
            </p>
            <p class="fst-italic">
              Berawal dari bangunan kontrakan Asrama Putri KPMB, dan atas perjuangan keras dari kakak-kakak pengurus KPMB periode sebelum tahun 
              1983, pada tanggal 18 Desember 1983 asrama mahasiswa/I Balikpapan yang permanen diresmikan oleh Walikotamadya Balikpapan saat itu 
              yaitu Bapak Syarifudin Yoes. Tanggal peresmian tersebut saat ini diperingati sebagai hari ulang tahun Asrama Mahasiswa/I Balikpapan. 
              Asrama Mahasiswa/I Balikpapan yang berdiri sekarang telah direnovasi semua dan terdiri dari 9 Ruangan kamar putra dan putri dengan 
              kapasitas daya tampung   72 orang, Dengan alamat Jl. Ramania RT 48 No 72.
            </p>
            <ul>
              <li>Fasilitas-fasilitas di ASMABA: </li>
              <li><i class="ri-check-double-line"></i>Kamar Tidur</li>
              <li><i class="ri-check-double-line"></i>Kamar Mandi</li>
              <li><i class="ri-check-double-line"></i>Aula Yang Luas</li>
              <li><i class="ri-check-double-line"></i>Dapur</li>
              <li><i class="ri-check-double-line"></i>Ruang Tamu</li>
              <li><i class="ri-check-double-line"></i>Garasi</li>
              <li><i class="ri-check-double-line"></i>Lapangan Olaraga</li>
              <li><i class="ri-check-double-line"></i>Wifi</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


     
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>Join With Us</h3>
          <p>Daftarkan diri dan gabung ke Asmaba, Asrama yang terjamin akan kebersihan dan keamanannya.</p>
          <a class="cta-btn" href="#">Skuy Join</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Dokumentasi</h2>
          <p>Foto-foto di bawah adalah sebagian kecil kegiatan di Asmaba, masih banyak lagi kegiatan seru lainnya yang bisa dirasakan setelah menjadi warga Asmaba.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Asmaba</li>
              <li data-filter=".filter-2021">Angkatan 2021</li>
              <li data-filter=".filter-kegiatan">Kegiatan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/asmaba.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asmaba</h4>
                <p>Warga</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/astri.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asmaba</h4>
                <p>Astri</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kukang.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kukang 2021</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/hut.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Asmaba</h4>
                <p>Warga</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kegiatan">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kunjungan3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kegiatan">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kunjungan2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kegiatan">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/kunjungan.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kegiatan</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-2021">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/hut2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kukang 2021</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/muah.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Astri</h4>
              </div>
            </div>
          </div>
    </section><!-- End Portfolio Section -->

  

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Team</h2>
              <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section>End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ASMABA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>