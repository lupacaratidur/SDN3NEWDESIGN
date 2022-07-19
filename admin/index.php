<?php
session_start();
include("../inc/inc_koneksi.php");
include("../inc/inc_fungsi.php");
include("inc_header.php");
?>



<!-- MAIN -->
<main>

  <h1>Hi, Halo</h1>
  <p>
    Selamat datang <b> <?php echo $_SESSION['admin_username'] ?> </b> di halaman Administrasi.
  </p>


  <?php include("inc_footer.php") ?>