<?php
require '../konek.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

$result=mysqli_query($db, 
"SELECT * FROM data_warga WHERE id='$id'");
$row=mysqli_fetch_array($result);

if(isset($_POST['btn'])){
    $nama=$_POST['nama'];
    $nomorhp=$_POST['nomor_hp'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $universitas=$_POST['universitas'];
    $jurusan=$_POST['jurusan'];
    $prodi=$_POST['prodi'];
    $angkatan=$_POST['angkatan'];
    $tgl_lahir=$_POST['tanggal'];
    $gender=$_POST['gen'];


    
    $result = mysqli_query($db, 
    "UPDATE data_warga SET
    nama = '$nama',
    nomorhp = '$nomorhp',
    email = '$email',
    alamat = '$alamat',
    universitas = '$universitas',
    jurusan = '$jurusan',
    prodi = '$prodi',
    angkatan = '$angkatan',
    tgl_lahir = '$tgl_lahir',
    gender = '$gender'
    WHERE id='$id'");

    if($result){
        echo "
            <script>
                alert('Data warga Berhasil Diedit');
                document.location.href='tables_warga.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data warga Gagal Diedit');
            </script>
        ";
    }
}
?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <title>Form Data Warga</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      height: 100%;
      }

      body, input{ 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }

      h1 {
      font-weight: 400;
      }

      h1 {
      font-size: 32px;
      color:black;
      }

      .main-block, .info {
      display: flex;
      flex-direction: column;
      }

      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%; 
      min-height: 100%;
      background: white;
      background-size: cover;
      }

      form {
      width: 80%; 
      padding: 25px;
      margin-bottom: 20px;
      background: rgba(0, 0, 0, 0.9);
      }

      input, select {
      padding: 5px;
      margin-bottom: 20px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      
      .metod {
      display: flex; 
      }
      input[type=radio] {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin-right: 20px;
      text-indent: 32px;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: -1px;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 5px;
      left: 5px;
      border-bottom: 3px solid #1c87c9;
      border-left: 3px solid #1c87c9;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: white;
      }
      button:hover {
      background: #095484;
      }


      @media (min-width: 568px) {
      .info {
      flex-flow: row wrap;
      justify-content: space-between;
      }
      input {
      width: 46%;
      }
      input.fname {
      width: 100%;
      }
      select {
      width: 48%;
      }
      }
    </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">ASMABA ADMIN</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Utama</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Menu Admin</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Jadwal Kegiatan
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="table_kegiatan.php">Lihat Jadwal</a>
                                    <a class="nav-link" href="form_kegiatan.php">Form Tambah Jadwal Kegiatan</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Data Warga Asmaba
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tables_warga.php">Data Warga</a>
                                    <a class="nav-link" href="form.php">Form Tambah Data Warga</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePage" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="far fa-plus-square"></i></div>
                                Buat Akun
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePage" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="akun_user.php">Akun Warga</a>
                                    <a class="nav-link" href="akun_admin.php">Akun Admin</a>
                                </nav>
                            </div>
                    </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Form Tambah Data Warga</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active"> Form Data Warga</li>
                        </ol>
                        <div class="main-block">
                            <h1>Form Data Warga Asmaba</h1>
                            <form action="" method="post">
                                <div class="info">
                                    <input  type="text" name="nama" placeholder="Nama Lengkap" autocomplete="off" value=<?=$row['nama']?>>
                                    <input type="text" name="nomor_hp" placeholder="Nomor WhatsApp" value=<?=$row['nomorhp']?>>
                                    <input type="email" name="email" placeholder="Email" value=<?=$row['email']?>>
                                    <input type="text" name="alamat" placeholder="Alamat" value=<?=$row['alamat']?>>
                                    <input type="text" name="universitas" placeholder="Uviversitas" autocomplete="off" value=<?=$row['universitas']?>>
                                    <input type="text" name="jurusan" placeholder="Jurusan" autocomplete="off" value=<?=$row['jurusan']?>>
                                    <input type="text" name="prodi" placeholder="Pogram studi" autocomplete="off" value=<?=$row['prodi']?>>
                                    <input type="number" name="angkatan" placeholder="Angkatan" autocomplete="off" value=<?=$row['angkatan']?>>
                                </div>
                                <p>Tanggal Lahir</p>
                                <div class="info">
                                     <input type="date" name="tanggal" placeholder="Tanggal Lahir">
                                </div>
                                <p>Jenis Kelamin</p>
                                <div class="metod">
                                    <div> 
                                        <input type="radio" value="Laki-laki" id="radioOne" name ="gen"/>
                                        <label for="radioOne" class="radio">Laki-laki</label>
                                    </div>
                                <div>
                                    <input type="radio" value="Perempuan" id="radioTwo" name ="gen" />
                                    <label for="radioTwo" class="radio">Perempuan</label>
                                </div>
                                <button class="button" name ="btn">Simpan</button>
                            </form>
                            </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ASMABA WEB 2022</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>




































