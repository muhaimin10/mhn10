<?php

  session_start();
  include 'koneksi.php';

  
?>  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PPDB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a style="font-size:25px; font-weight:bold;" class="navbar-brand" href="#">
          <img src="images/logo.jpg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">
          PPDB
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="?page=home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=panduan">Panduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=daftar">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=visi-misi">Visi & Misi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=hubungi-kami">Hubungi Kami</a>
            </li>
          </ul>
        </div>
      </nav>
      
      <?php

          if(isset($_GET['page'])){

            include_once($_GET['page'].'.php');
          }else {

            include 'home.php';
          }


      ?>

  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Putra</a>
      </div>
    </div>
  </footer><!-- End Footer -->

</div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>