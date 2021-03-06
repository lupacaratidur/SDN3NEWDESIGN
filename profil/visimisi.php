<?php
include_once("../inc/inc_koneksi.php");
include_once("../inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SD Negeri 3 - Purwokerto Kidul</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">SD Negeri 3 Purwokerto Kidul<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link " href="../index.php">Beranda</a></li>
          <li class="dropdown"><a href="#Profil"><span class="nav-link active">Profil</span> <i
                class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="active" href="profil/visimisi.php">VISI dan MISI</a></li>
              <li><a href="guruguru.php">GURU</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="../fasilitas/fasilitas.php">Fasilitas</a></li>
          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../galeri/galerifoto.php">Galeri Foto</a></li>
              <li><a href="../galeri/galerividio.php">Galeri Vidio</a></li>
            </ul>
          </li>
          <li><a style="background: #F63854; border-radius: 5px; color: #fff;" class="nav-link scrollto"
              href="../admin/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- VISI MISI -->
  <section id="visimisi">
    <div class="container">
      <div class="row justify-content-center">
        <h2 class="text-center my-5 ofh titled" data-aos="fade-down" data-aos-duration="1000">Visi & Misi</h2>
      </div>
      <div class="row">
        <div class="col-md-6 ofh" data-aos="fade-right" data-aos-duration="1000">
          <div class="card">
            <div class="card-body">
              <h5 class="title">Visi</h5>
              <p class="card-text fs-5" align="justify">"<?php echo ambil_visi('1') ?>"</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 ofh" data-aos="fade-left" data-aos-duration="1000">
          <div class="card">
            <div class="card-body">
              <h5 class="title">Misi</h5>
              <p class="card-text " align="justify">
              <ol class="fs-6" align="justify">
                <?php echo ambil_misi('1') ?>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="spacer"></div>
  </section>
  <!-- AKHIR VISI MISI -->


  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>SD Negeri 3-Purwokerto Kidul</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="">wahrul</a>
    </div>
  </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>