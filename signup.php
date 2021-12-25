<?php
    require 'config/connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>

<html lang="en">
  <head>
  <section id="hero" class="d-flex flex-column justify-content-center">
      
  <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Taktemu.id - Elearning Design</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.jpg" rel="icon" />
    <link href="assets/img/apple-touch-icon.jpg" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
<html>
    <head>
    <div class="image col-lg-6 order-1 order-lg-2" style="background-image: url('assets/img/features.jpg')"></div>
 
         <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0"><a href="index.php">Taktemu.id</a></h1>
            <i class="bi bi-arrow-right-circle"></i>
      <div class="fa-5x">Daftar Bro </div>
      
              <a href="login.php" class="btn-learn-more">Udah Punya Akun ? Login</a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">

              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
    </head>
    <body>

 
        <div>

            <br><br>

                    <div class="col-xs-4 col-xs-offset-4">
                        <h1 <b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nama" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="No. HP (WA) *untuk dikontak" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="Asal Kota" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Alamat Kamu" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="DAFTAR"> </div>

                           
                        </form>
                    </div>
                </div>
            </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
      <div class="container">
        <h3>Taktemu.id</h3>
        <p>by Franky Samuel Octavianus</p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/taktemu.id/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/franky-samuel-octavianus/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright 2021
          <strong
            ><span><taktemu class="id"></taktemu></span></strong
          >. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/knight-simple-one-page-bootstrap-template/ -->
          Designed by <a href="https://www.instagram.com/samoctvns/">FSO</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->
        </div>
    </body>
</html>
