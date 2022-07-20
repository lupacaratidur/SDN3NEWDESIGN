<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
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
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <li><a class="nav-link active" href="#beranda">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profil/visimisi.php">VISI dan MISI</a></li>
              <li><a href="profil/guruguru.php">GURU</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="fasilitas/fasilitas.php">Fasilitas</a></li>
          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="galeri/galerifoto.php">Galeri Foto</a></li>
              <li><a href="galeri/galerividio.php">Galeri Vidio</a></li>
            </ul>
          </li>
          <li><a style="background: #F63854; border-radius: 5px; color: #fff;" class="nav-link scrollto"
              href="admin/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="beranda" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>TANGGUL TAMAN BUDAYA<span>.</span></h1>
      <h2>Taqwa, Unggul, Berprestasi, Mandiri, Berbudi luhur, dan Berdaya</h2>
    </div>
  </section><!-- End Hero -->



  <!-- Sambutan Kepala Sekolah -->
  <section class="sambutan-kepsek section-bg">
    <div class="container">
      <div class="row">
        <?php
        $sql1   = "select * from tb_sambutan order by id asc";
        $q1     = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1); {
        ?>
        <div class="col-sm-5 ">
          <img src="<?php echo url_dasar() . "/upload_an/" . sambutan_foto($r1['id']) ?>" class="img-fluid" alt=""
            width="6000">
        </div>

        <div class="col mt-3">
          <div class="icon-box">
            <h2 style="color: #F63854;" class="oren">Sambutan Kepala Sekolah</h2>
            <p><?php echo ambil_isi_sambutan('14') ?></p><br>
            <p><?php echo ambil_nama_sambutan('14') ?></p>
          </div>
        </div>
      </div>
      <?php
        }
    ?>
    </div>
  </section>
  <!-- Akhir Sambutan Kepala Sekolah -->

  <!-- ======= Xtrakulikuler Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="section-title">
      <h2>Extrakulikuler</h2>
    </div>
    <!-- List eXtrakulikuler -->
    <div class="container" style="padding-left: 80px;">
      <div class="row">
        <?php
        $sql1   = "select * from tb_ekstrakulikuler order by id asc";
        $q1     = mysqli_query($koneksi, $sql1);
        while ($r1 = mysqli_fetch_assoc($q1)) {
        ?>
        <div class="col-md-4">
          <div class="list-ekstra" style="font-size: 22px;">
            <img src="<?php echo url_dasar() . "/upload_an/" . ekstrakulikuler_foto($r1['id']) ?>" width="50">
            <?php echo $r1['nama'] ?>
          </div>
        </div>
        <?php
        }
        ?>

      </div>
    </div>
  </section>
  <!-- End Extrakulikuler Section -->

  <!-- Prestasi Section -->
  <section id="featured-services" class="featured-services">
    <div class="section-title">
      <h2>Prestasi</h2>
    </div>
    <div class="container">
      <div class="row">
        <?php
        $sql1   = "select * from tb_prestasi order by id asc";
        $q1     = mysqli_query($koneksi, $sql1);
        while ($r1 = mysqli_fetch_assoc($q1)) {
        ?>
        <div class="col-md-4 ofh" data-aos="zoom-out" data-aos-duration="1000">
          <div class="card">
            <img class="card-img-top" src="<?php echo url_dasar() . "/upload_an/" . prestasi_foto($r1['id']) ?>">
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $r1['prestasi'] ?></h5>
            </div>
          </div>
        </div>
        <?php
        }
        ?>

      </div>
    </div>
    <div class="spacer"></div>

    </div>
  </section>
  <!-- End Prestasi Section -->

  <!-- BERITA SECTION -->
  <section id="featured-services" class="featured-services">
    <div class="section-title">
      <h2>Berita</h2>
    </div>

    <section class="berita">
      <div class="container">
        <?php
        $sql1       = "select * from tb_berita order by id asc";
        $q1         = mysqli_query($koneksi, $sql1);
        while ($r1 = mysqli_fetch_array($q1)) {
        ?>
        <div class="container-sm">
          <div class="row d-flex justify-content-center p-3">
            <div class="col-md-4 col-md-offset-5 p-3">
              <div class="card-berita-2" style="width: 18rem;">
                <a href="<?php echo buat_link_berita($r1['id']) ?>">
                  <img src="<?php echo url_dasar() . "/upload_an/" . berita_foto($r1['id']) ?>" class="card-img-top"
                    alt=""></a>
                <div class="card-body">
                  <h6 class="card-title-2"><?php echo $r1['judul'] ?></h6>
                  <a href="<?php echo buat_link_berita($r1['id']) ?>" class="btn btn-oren">Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      </div>
    </section>
    <!-- END BERITA SECTION -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <h3><span>Hubungi Kami</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p><?php echo ambil_alamat('4') ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p><?php echo ambil_email('4') ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telepon</h3>
              <p><?php echo ambil_telepon('4') ?></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63300.96974094285!2d109.20378569061324!3d-7.430839277501736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f2b30771ceb%3A0x9ff1b2354038c296!2sSDN%203%20PURWOKERTO%20KIDUL!5e0!3m2!1sid!2sid!4v1654894660836!5m2!1sid!2sid" " frameborder="
              0" style="border:0; width: 205%; height: 384px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->



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
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>