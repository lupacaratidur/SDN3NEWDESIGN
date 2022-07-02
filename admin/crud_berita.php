<?php
include("../inc/inc_koneksi.php");
include("../inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

  <link href="../assets/css/summernote-image-list.min.css">
  <script src="../assets/js/summernote-image-list.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <style>
  .image-list-content .col-lg-3 {
    width: 100%;
  }

  .image-list-content img {
    float: left;
    width: 20%;
  }

  .image-list-content p {
    float: left;
    padding-left: 20px;
  }

  .image-list-item {
    padding: 10px 0px 10px 0px;
  }
  </style>
</head>

<body class="container">
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="#">Admin<span>.</span></a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li class="nav-item">
            <a class="nav-link active" href="crud_berita.php">Crud Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="data_pendaftaran.php">Crud Pendaftaran </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Crud Galeri Foto </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Crud Galeri Vidio</a>
          </li>
          <li><a style="background: #F63854; border-radius: 5px; color: #fff;" class="nav-link scrollto"
              href="../index.php">Log Out>></a></li>
        </ul>

      </nav>
    </div>
  </header>
  <!-- ENDD HEADER -->

  <!-- MAIN -->
  <main>
    <?php
    $sukses = "";
    $katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
    // Fungsi delete 
    if (isset($_GET['op'])) {
      $op = $_GET['op'];
    } else {
      $op = "";
    }

    if ($op == 'delete') {
      $id = $_GET['id'];
      $sql1 = "select foto from tb_berita where id = '$id'";
      $q1         = mysqli_query($koneksi, $sql1);
      $r1         = mysqli_fetch_array($q1);
      @unlink("../berita/upload_an/" . $r1['foto']);

      $sql1   = "delete from tb_berita where id = '$id'";
      $q1     = mysqli_query($koneksi, $sql1);

      if ($q1) {
        $sukses   = "Berhasil hapus data!";
      }
    }
    ?>
    <!-- sampe sini -->

    <h1>CRUD BERITA</h1>
    <p>
      <a href="input_berita.php">
        <input type="button" class="btn btn-primary" value="Buat Berita Baru" />
      </a>
    </p>
    <?php
    if ($sukses) {
    ?>
    <div class="alert alert-primary" role="alert">
      <?php echo $sukses ?>
    </div>
    <?php


    }
    ?>

    <form class="row g-3" method="get" action="">
      <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukan Kata Kunci" name="katakunci"
          value="<?php echo $katakunci ?>" />
      </div>
      <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary">
      </div>
    </form>
    <table class="table table-striped">
      <!--Untuk bagian atas tabel  -->
      <thead>
        <tr>
          <th class="col-1">#</th>
          <th ">Judul</th>
      <th class=" col-2">Foto</th>
          <th>Isi</th>
          <th col-2>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <?php
        $sqltambahan = "";
        $per_berita  = 1;
        //  Fungsi Cari
        if ($katakunci != '') {
          $array_katakunci = explode(" ", $katakunci);
          for ($x = 0; $x < count($array_katakunci); $x++) {
            $sqlcari[] = "(judul like '%" . $array_katakunci[$x] . "%' or isi like '%" . $array_katakunci[$x] . "%' )";
          }
          $sqltambahan = "where " . implode(" or ", $sqlcari);
        }

        // Fungsi untuk menampilkan apa yang telah diinput di input_berita.php

        $sql1       = "select * from tb_berita $sqltambahan";
        $page       = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $mulai      = ($page > 1) ? ($page * $per_berita) - $per_berita : 0;
        $q1         = mysqli_query($koneksi, $sql1);
        $total      = mysqli_num_rows($q1);
        $pages      = ceil($total / $per_berita);
        $nomor      = $mulai + 1;
        $sql1       = $sql1 . " order by id desc limit $mulai,$per_berita";



        $q1         = mysqli_query($koneksi, $sql1);
        while ($r1 = mysqli_fetch_array($q1)) {
        ?>
        <tr>
          <td><?php echo $nomor++ ?></td>
          <td><?php echo $r1['judul'] ?></td>
          <td><img src="../berita/upload_an/<?php echo ambil_foto($r1['id']) ?>"
              style="max-height:100px;max-width:100px" />
          </td>
          <td><?php echo $r1['isi'] ?></td>
          <td>

            <a href=" input_berita.php?id=<?php echo $r1['id'] ?>">
              <span class="badge bg-warning" style="color: #000;">Edit</span>
            </a>

            <!-- konfirmasi hapus data menggunakan alert -->
            <a href="crud_berita.php?op=delete&id=<?php echo $r1['id']  ?>"
              onclick="return confirm('Apakah yakin ingin hapus data?')">
              <span class="badge bg-danger">Delete</span>
            </a>
          </td>
        </tr>
        <!-- sampe sini -->

        <?php

        }
        ?>

      </tbody>

    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <?php
        $no = 1;
        $cari = (isset($_GET['cari'])) ? $_GET['cari'] : "";
        for ($i = 1; $i <= $pages; $i++) {
        ?>
        <li class="page-item">
          <a class="page-link"
            href="crud_berita.php?katakunci=<?php echo $katakunci ?>&cari=<?php echo $cari ?>&page=<?php echo $i ?>">
            <?php

              echo $no++ ?>


          </a>
        </li>
        <?php
        }
        ?>
      </ul>
    </nav>




    <?php include("inc_footer.php") ?>