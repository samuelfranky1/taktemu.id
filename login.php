<?php
    require 'config/connection.php';
    session_start();
?>
<!DOCTYPE html>

<html lang="en">
  <head>
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
           <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
            <h1 class="logo me-auto me-lg-0"><a href="index.php">Taktemu.id</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
              <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="index.php">About</a></li>
                <li><a class="nav-link scrollto" href="index.php">Services</a></li>
                <li><a class="nav-link scrollto" href="index.php">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="index.php">Pricing</a></li>
                <li class="dropdown">
                  <a href="#"><span>Toko</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="#">Kelas Design</a></li>
                    <li class="dropdown">
                      <a href="#"><span>Jasa Design Grafis</span> <i class="bi bi-chevron-right"></i></a>
                      <ul>
                        <li><a href="#">Desain Marketing</a></li>
                        <li><a href="#">Desain Edukasi</a></li>
                        <li><a href="#">Desain Ilustrasi</a></li>
                        <li><a href="#">Desain 3D</a></li>
                        <li><a href="#">Desain For UMKM</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Video Editing</a></li>
                    <li><a href="#">Kelas Video Editing</a></li>
                    <li><a href="#">Merch</a></li>
                  </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <a href="login.php" class="get-started-btn scrollto">Login</a>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->
        <link rel="shortcut icon" href="img/ikon-LOGO.png" />

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="style.css">
    </head>
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <h1>Web Graphic Design</h1>
            <h2><i>"For Beginner"</i></h2>
            <h2>Design Agency Virtual in Indonesia</h2>

          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->
    <body>
        <div>

            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>MASUK</h3>
                            </div>
                            <div class="panel-body">

                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Tidak mempunyai akun? <a href="signup.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
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
        <div class="portfolio-details">
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
