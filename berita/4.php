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
  <link!-- Vendor CSS Files -->
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
          <li><a class="nav-link scrollto " href="../index.php">Beranda</a></li>
          <li class="dropdown"><a href="#"><span class="scrollto">Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../profil/visimisi.php">VISI dan MISI</a></li>
              <li><a href="../profil/guruguru.php">GURU</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="fasilitas/fasilitas.php">Fasilitas</a></li>
          <li><a class="nav-link scrolltoa active" href="../berita.php">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../galeri/galerifoto.php">Galeri Foto</a></li>
              <li><a href="../galeri/galerividio.php">Galeri Vidio</a></li>
            </ul>
          </li>
          <li><a style="background: #F63854; border-radius: 5px; color: #fff;" class="nav-link scrollto" href="../login/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>/-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Section Berita  ======= -->
    <section class="detailberita">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row mb-3">
              <div class="col-md-11">
                <p style="font-size: 30px; font-weight: 600;"><b>PEMANFAATAN BANTUAN TIK UNTUK KEGIATAN
                    ASESMEN</b></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <?php echo ambil_gambar('11') ?>
                <img src="" class="img-fluid" alt="pemanfaatan.png">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-11">
                <p style="text-justify: inter-word; text-align: justify;">Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci
                  orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non
                  leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id
                  nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat
                  non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.

                  In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non.
                  Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet,
                  nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci
                  orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non
                  leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id
                  nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat
                  non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem
                  amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit
                  amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium
                  orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant
                  gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                  ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc
                  pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci
                  orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non
                  leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id
                  nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat
                  non. Mi habitant gravida non leo</p>
              </div>

            </div>
          </div>

          <div class="col-lg-4">
            <div class="row mb-4">
              <div class="col-sm-5">
                <a href="1.php"><img src="../assets/img/berita/impeldown.jpg" class="img-thumbnail" alt="pemanfaatan.png"></a>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-1" style="font-size: 10px; text-align: right;"><b> 1 second 
                <p style="font-size: 12px; font-weight: 600; margin-bottom: 2px;"><a href="1.php"><b>PEMANFAATAN
                      BANTUAN TIK UNTUK KEGIATAN ASESMEN</b></a></p>
                <p style="font-size: 10px; margin-bottom: 2px ;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing...</p>
                <a style="font-size: 12px; font-weight: 700;" href="1.php">
                  Readmore
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-5">
                <a href="2.php"><img src="../assets/img/berita/marinford.jpg" class="img-thumbnail" alt="sambutsiswa.png"></a>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-1" style="font-size: 10px; text-align: right;"><b> 1 second ago </b>
                </p> tyle="font-size: 12px; font-weight: 600; margin-bottom: 2px;"><a href="2.php"><b>KEGIATAN
                      PEMBIASAAN MENYAMBUT SISWA</b></a></p>
                <p style="font-size: 10px; margin-bottom: 2px ;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing...</p>
                <a style="font-size: 12px; font-weight: 700;" href="2.php">
                  Readmore
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-5">
                <a href="3.php"><img src="../assets/img/berita/wano.jpg" class="img-thumbnail" alt="daktik.png"></a>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-1" style="font-size: 10px; text-align: right;"><b> 1 second ago </b>
                </p>
                <p style="font-size: 12px; font-weight: 600; margin-bottom: 2px;"><a href="3.php"><b>MENERIMA DAK TIK
                      rp 220.000.000,-</b></a></p>
                <p style="font-size: 10px; margin-bottom: 2px ;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing...</p>
                <a style="font-size: 12px; font-weight: 700;" href="3.php">
                  Readmore
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-5">
                <a href="4.php"><img src="../assets/img/berita/wholecake island.jpg
                                " class="img-thumbnail" alt="pemanfaatan.png"></a>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-1" style="font-size: 10px; text-align: right;"><b> 1 second ago </b>
                </p>
                <p style="font-size: 12px; font-weight: 600; margin-bottom: 2px;"><a href="4.php"><b>PEMANFAATAN
                      BANTUAN TIK UNTUK KEGIATAN ASESMEN</b></a></p>
                <p style="font-size: 10px; margin-bottom: 2px ;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing...</p>
                <a style="font-size: 12px; font-weight: 700;" href="4.php">
                  Readmore
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-5">
                <a href="5.php"><img src="../assets/img/berita/zou.jpg" class="img-thumbnail" alt="sambutsiswa.png"></a>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-1" style="font-size: 10px; text-align: right;"><b> 1 second ago </b>
                </p>
                <p style="font-size: 12px; font-weight: 600; margin-bottom: 2px;"><a href="5.php"><b>KEGIATAN
                      PEMBIASAAN MENYAMBUT SISWA</b></a></p>
                <p style="font-size: 10px; margin-bottom: 2px ;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing...</p>
                <a style="font-size: 12px; font-weight: 700;" href="5.php">
                  Readmore
                </a>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-sm-5">
                <a href="6.php"><img src="../assets/img/berita/fishman.jpg" class="img-thumbnail" alt="daktik.png"></a>
              </div>
              <div class="col-sm-7">
                <p class="text-muted mb-1" style="font-size: 10px; text-align: right;"><b> 1 second ago </b>
                </p>
                <p style="font-size: 12px; font-weight: 600; margin-bottom: 2px;"><a href="6.php"><b>MENERIMA DAK TIK
                      rp 220.000.000,-</b></a></p>
                <p style="font-size: 10px; margin-bottom: 2px ;">Lorem ipsum dolor sit amet, consectetur
                  adipiscing...</p>
                <a style="font-size: 12px; font-weight: 700;" href="6.php">
                  Readmore
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- End #main -->

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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>ript src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>