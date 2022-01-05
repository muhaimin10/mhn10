<?php
    session_start();
    include '../koneksi.php';
    if($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
        
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
        <title>MA NURUSAADAH</title>
        <link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
        <link href="../css/styles.css" rel="stylesheet"/>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">MA NURUSAADAH</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?page=logout">Logout</a></li>
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
                            <a class="nav-link" href="?page=dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="?page=data-admin">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Data Admin
                            </a>

                            <a class="nav-link" href="?page=data-pendaftar">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Data Pendaftaran
                            </a>

                            <a class="nav-link" href="?page=data-orangtua">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Data Orangtua
                            </a>

                            <!-- <a class="nav-link" href="?page=data-dokumen">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Data Dokumen
                            </a> -->

                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <?php
                            if(isset($_GET['page'])){

                                include_once($_GET['page'].'.php');

                            }else{

                                include 'dashboard.php';
                            }
                        ?>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
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
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="../js/scripts.js"></script>
        <script src="../js/popper.min.js"></script>
        <!-- <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script> -->
        <!-- <script src="../js/datatables-simple-demo.js"></script> -->
    </body>
</html>
