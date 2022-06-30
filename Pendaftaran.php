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

  <!-- deklarasi variabel -->
  <?php
  $nama_peserta  = '';
  $nik = '';
  $alamat  = '';
  $nama_ibu  = '';
  $nama_ayah  = '';
  $foto_kk  = '';
  $foto_akta  = '';
  $sukses  = '';
  $error  = '';

  if (isset($_GET['id'])) {
    $id     = $_GET['id'];
  } else {
    $id = "";
  }

  if ($id != "") {
    $sql1       = "select * from tb_pendaftaran where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama_peserta  = $r1['nama_peserrta'];
    $nik           = $r1['nik'];
    $alamat        = $r1['alamat'];
    $nama_ibu      = $r1['nama_ibu'];
    $nama_ayah     = $r1['nama_ayah'];
    $foto_kk       = $r1['foto_kk'];
    $foto_akta     = $r1['foto_akta'];

    if ($nama_peserta == '') {
      $error = "Data tidak ditemukan";
    }
  }

  if (isset($_POST['simpan'])) {
    $nama_peserta  = $_POST['nama_peserrta'];
    $nik           = $_POST['nik'];
    $alamat        = $_POST['alamat'];
    $nama_ibu      = $_POST['nama_ibu'];
    $nama_ayah     = $_POST['nama_ayah'];
    $foto_kk       = $_POST['foto_kk'];
    $foto_akta     = $_POST['foto_akta'];

    if ($nama_peserta == '' or $nik == '' or $alamat == '' or $nama_ibu == '' or $nama_ayah == '' or $foto_kk == '' or $foto_akta == '') {
      $error     = "Silakan masukkan semua data.";
    }
  }


  if ($nama_peserta == '' or $nik == '' or $alamat == '' or $nama_ibu == '' or $nama_ayah == '' or $foto_kk == '' or $foto_akta == '') {
    $error      = "Dimohon untuk memasukan data";
  }

  // Fungsi untuk memasukan data ke database phpmyadmin
  if ($id != "") {
    $sql1 = "update tb_pendaftaran set nama_peserta = '$nama_peserta', nik = '$nik', alamat = '$alamat', nama_ibu = '$nama_ibu', nama_ayah = '$nama_ayah', foto_kk = '$foto_kk', foto_akta = '$foto_akta' where id = '$id'";
  } else {
    $sql1       = "insert into tb_pendaftaran(nama_peserta, nik, alamat, nama_ibu, nama_ayah, foto_kk, foto_akta) values('$nama_peserta', '$nik', '$alamat', '$nama_ibu', '$nama_ayah', '$foto_kk', '$foto_akta')";
  }

  $q1         = mysqli_query($koneksi, $sql1);
  if ($q1) {
    $sukses     = "Sukses memasukan data";
  } else {
    $error      = "gagal memasukan data";
  }




  ?>



  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">SD Negeri 3 Purwokerto Kidul<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profil/visimisi.php">VISI dan MISI</a></li>
              <li><a href="profil/guruguru.php">GURU</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="fasilitas/fasilitas.php">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="berita.php">Berita</a></li>
          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="galeri/galerifoto.php">Galeri Foto</a></li>
              <li><a href="galeri/galerividio.php">Galeri Vidio</a></li>
            </ul>
          </li>
          <li><a style="background: #F63854; border-radius: 5px; color: #fff;" class="nav-link scrollto"
              href="login/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  </div>

  <?php
  if ($error) {
  ?>
  <div class="alert alert-danger" role="alert">
    <?php echo $error ?>
  </div>
  <?php
  }
  ?>

  <?php
  if ($sukses) {
  ?>
  <div class="alert alert-primary" role="alert">
    <?php echo $sukses ?>
  </div>
  <?php
  }
  ?>

  <!-- DAFTAR -->

  <div style="margin-top: 130px"></div>
  <main class="form-register">
    <div class="container">
      <h1 class="h3 mb-3 fw-normal text-center">Form Pendaftaran</h1>
      <form action="pendaftaran.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="7IIcpiEmlesCd80RFffhh446DsfN8LDaA8tYrdDH">
        <div class="form-floating">
          <input type="text" name="nama" class="form-control rounded-top mt-3" id="nama_peserta" "
            placeholder=" Name">
          <label for="name">Nama Peserta Didik</label>
        </div>
        <div class="form-floating">
          <input type="text" name="nik" class="form-control mt-3" id="nik" placeholder="NIK">
          <label for="username">NIK</label>
        </div>
        <div class="form-floating">
          <input type="text" name="alamat" class="form-control mt-3" id="alamat" placeholder="Alamat">
          <label for="email">Alamat</label>
        </div>

        <div class="form-floating">
          <input type="text" name="nama_ibu" class="form-control mt-3" id="nama_ibu" "
            placeholder=" Nama Ibu">
          <label for="email">Nama Ibu</label>
        </div>

        <div class="form-floating">
          <input type="text" name="nama_ayah" class="form-control mt-3" id="nama_ayah" placeholder="Nama Ayah">
          <label for="email">Nama Ayah</label>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label mt-3">Foto Kartu Keluarga</label>
          <input class="form-control" name="file_kk" type="file" id="foto_kk" ">
        </div>

        <div class=" mb-3">
          <label for="formFile" class="form-label mt-3">Foto Akta Kelahiran</label>
          <input class="form-control" name="file_akta_kelahiran" type="file" id="fotoa-akta" ">
        </div>

        <button style=" background: #F63854; color: #fff;" class="w-100 btn btn-lg mt-4 mb-4"
            type="submit">Register</button>
      </form>
    </div>

  </main>
  <!-- AKHIR DAFTAR -->

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