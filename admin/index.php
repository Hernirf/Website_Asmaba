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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <style>
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
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Data Warga Asmaba
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tables_warga.php">Data Warga</a>
                                    <a class="nav-link" href="form.php">Form Tambah Data Warga</a>
                                </nav>
                            </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Warga Asmaba 2021/2022
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal lahir</th>
                                            <th>Nomor WhatsApp</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Universitas</th>
                                            <th>Fakultas</th>
                                            <th>Program Studi</th>
                                            <th>Angkatan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal lahir</th>
                                            <th>Nomor WhatsApp</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Universitas</th>
                                            <th>Fakultas</th>
                                            <th>Program Studi</th>
                                            <th>Angkatan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Herni Suhartati</td>
                                            <td>11 Januari 2002</td>
                                            <td>085334243456</td>
                                            <td>herby.jan1102@gmail.com</td>
                                            <td>Perempuan</td>
                                            <td>Universitas Mulawarman</td>
                                            <td>Teknik</td>
                                            <td>Informatika</td>
                                            <td>2021</td>
                                        </tr>
                                        <tr>
                                            <td>Tihani Nur Amalina Suwanti</td>
                                            <td>27 Februari 2002</td>
                                            <td>085342243409</td>
                                            <td>tihaninur@gmail.com</td>
                                            <td>Perempuan</td>
                                            <td>Universitas</td>
                                            <td>Kehutanan</td>
                                            <td>Kehutanan</td>
                                            <td>2021</td>
                                        </tr>
                                        <tr>
                                            <td>Lindiyanti Rofiah Qudsy</td>
                                            <td>22 September 2003</td>
                                            <td>085334245325</td>
                                            <td>lindyanti@gmail.com</td>
                                            <td>Perempuan</td>
                                            <td>UMKT</td>
                                            <td>Psikologi</td>
                                            <td>S1 Psikologi</td>
                                            <td>2021</td>
                                        </tr>
                                        <tr>
                                            <td>Raudha Faradhila Hasanadi</td>
                                            <td>18 Juli 2003</td>
                                            <td>082334243454</td>
                                            <td>raudha@gmail.com</td>
                                            <td>Perempuan</td>
                                            <td>Universitas Mulawarman</td>
                                            <td>FPIK</td>
                                            <td>PGSD</td>
                                            <td>2021</td>
                                        </tr>
                                        <tr>
                                            <td>Christin Debora</td>
                                            <td>15 Desember 2002</td>
                                            <td>0812344543456</td>
                                            <td>Christian@gmail.com</td>
                                            <td>Perempuan</td>
                                            <td>Poltekkes Kemenkes Kaltim</td>
                                            <td>Kebidanan</td>
                                            <td>D4 Kebidanan dan Profesi Bidan</td>
                                            <td>2021</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
