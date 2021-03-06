<?php
session_start();
if (isset($_SESSION['admin_username']) != '') {
  header("location:index.php");
  exit();
}
include_once("../inc/inc_koneksi.php");

$username   = "";
$password   = "";
$err        = "";

if (isset($_POST['login'])) {
  $username       = $_POST['username'];
  $password       = $_POST['password'];

  if ($username == '' or $password == '') {
    $err    = "Silakan masukkan semua isian";
  } else {
    $sql1   = "select * from tb_admin where username = '$username'";
    $q1     = mysqli_query($koneksi, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $n1     = mysqli_num_rows($q1);

    if ($n1 < 1) {
      $err = "Username tidak ditemukan";
    } elseif ($r1['password'] != md5($password)) {
      $err = "Password yang kamu masukkan tidak sesuai";
    } else {
      $_SESSION['admin_username']     = $username;
      header("location:index.php");
      exit();
    }
  }
}
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
          <li><a class="nav-link scrollto " href="../index.php">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../profil/visimisi.php">VISI dan MISI</a></li>
              <li><a href="../profil/guruguru.php">GURU</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="../fasilitas/fasilitas.php">Fasilitas</a></li>
          <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../galeri/galerifoto.php">Galeri Foto</a></li>
              <li><a href="../galeri/galerividio.php">Galeri Vidio</a></li>
            </ul>
          </li>
          <li><a style="background: #F63854; border-radius: 5px; color: #fff;" class="nav-link scrollto active"
              href="login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header><!-- End Header -->

  <div style="margin-top: 200px">
  </div>
  <div class="row justify-content-center">
    <div class="col-md-4">
      <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal text-center">Login Admin</h1>
        <?php
        if ($err) {
        ?>
        <div class="alert alert-danger">
          <?php echo $err ?>
        </div>
        <?php
        }
        ?>
        <form action="login.php" method="POST">
          <input type="hidden" name="_token" value="7IIcpiEmlesCd80RFffhh446DsfN8LDaA8tYrdDH">
          <div class="form-floating">
            <input type="username" name="username" class="form-control" id="floatingInput"
              placeholder="Masukan username" value="<?php echo $username ?>">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Masukan password">
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg" name="login" style="background: #F63854; color: #fff;"
            type="submit">Login</button>
        </form>
      </main>
    </div>
  </div>
  </main>


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