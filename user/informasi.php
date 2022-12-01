<?php

 session_start();
 require '../konek.php';
 if(!isset($_SESSION['login'])){
  echo "<script>
      alert('Silahkan login terlebih dahulu');
      document.location.href='../index.php';
          </script> ";
}

$result = mysqli_query($db, "SELECT * FROM data_warga");
$result2 = mysqli_query($db, "SELECT * FROM kegiatan");

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
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script type="text/javascript" src="./tabel/jquery.js"></script>
  <script type="text/javascript" src="./tabel/dataTabel/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./tabel/dataTabel/css/jquery.dataTables.min.css">

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
            <li><a class="nav-link scrollto active" href="user.php">Home</a></li>
            <li><a href="informasi.php">Informasi</a></li>
            <li><a class="getstarted scrollto" href="../logout.php">Logout</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>DATA WARGA DAN KEGIATAN</h1>
      <h2>Website Asrama Mahasiswa/i Balikpapan</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Informasi</a> -->
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="fade-left">
          <h2>Data Warga</h2>
        </div>
            <!-- <div class="card-body"> -->
                <table id="tabel1" border="1" class="cell-border">
                    <thead class="cell-border" border="1">
                    <tr>
                            <th>Nama</th>
                            <th>Tanggal lahir</th>
                            <th>Nomor WhatsApp</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Universitas</th>
                            <th>Fakultas</th>
                            <th>Program Studi</th>
                            <th>Angkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        while($row = mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td> <?=$row['nama']?> </td>
                            <td> <?=$row['tgl_lahir']?> </td>
                            <td> <?=$row['nomorhp']?> </td>
                            <td> <?=$row['alamat']?> </td>
                            <td> <?=$row['email']?> </td>
                            <td> <?=$row['gender']?> </td>
                            <td> <?=$row['universitas']?> </td>
                            <td> <?=$row['jurusan']?> </td>
                            <td> <?=$row['prodi']?> </td>
                            <td> <?=$row['angkatan']?> </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            <!-- </div> -->
          </div>
      </div>
    </section><!-- End About Section -->


     
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <!-- <h3>Join With Us</h3> -->
          <!-- <p>Daftarkan diri dan gabung ke Asmaba, Asrama yang terjamin akan kebersihan dan keamanannya.</p> -->
          <a class="cta-btn" href="user.php">HOME</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Jadwal Kegiatan</h2>
          <!-- <p>Foto-foto di bawah adalah sebagian kecil kegiatan di Asmaba, masih banyak lagi kegiatan seru lainnya yang bisa dirasakan setelah menjadi warga Asmaba.</p> -->
        </div>
        <table id="tabel2" border="1" class="cell-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Tanggal Pelaksanaan</th>
                    <th>TSO Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                        $i=1;
                        while($row = mysqli_fetch_array($result2)){
                    ?>
                <tr>
                    <td> <?=$i; ?> </td>
                    <td> <?=$row['nama']?> </td>
                    <td> <?=$row['tso']?> </td>
                    <td> <?=$row['tgl_kegiatan']?> </td>
                </tr>
                <?php
                    $i++;
                    }
                ?>
            </tbody>
        </table>

    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ASMABA</span></strong>. All Rights Reserved
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./admin/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="./admin/js/datatables-simple-demo.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



<script type="text/javascript">
        $(document).ready(function() {
            $('#tabel1, #tabel2').DataTable({
                    "ordering":false,
                    "info":false,
                    "lengthChange":false,
                    "pageLength":10,
                    "searching": false
                }

            );
        });
</script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../admin/js/datatables-simple-demo.js"></script>
</body>


</html>