<?php include("inc_header.php") ?>
<?php
$judul       = "";

$vidio       = "";
$vidio_name  = "";

$error      = "";
$sukses     = "";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
}

if ($id != "") {
  $sql1   = "select * from tb_galeri_vidio where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $judul   = $r1['judul'];


  if ($judul == '') {
    $error  = "Data tidak ditemukan";
  }
}

if (isset($_POST['simpan'])) {
  $judul      = $_POST['judul'];


  if ($judul == '') {
    $error     = "Silakan masukkan data judul.";
  }
  //Array ( [vidio] => Array ( [name] => Budi Rahardjo.jpg [type] => image/jpeg [tmp_name] => C:\xampp2\tmp\php4FDD.tmp [error] => 0 [size] => 2375701 ) )
  // print_r($_FILES);
  if ($_FILES['vidio']['name']) {
    $vidio_name = $_FILES['vidio']['name'];
    $vidio_file = $_FILES['vidio']['tmp_name'];

    $detail_file = pathinfo($vidio_name);
    $vidio_ekstensi = $detail_file['extension'];
    // Array ( [dirname] => . [basename] => Romi Satrio Wahono.jpg [extension] => jpg [filename] => Romi Satrio Wahono )
    $ekstensi_yang_diperbolehkan = array("mp4", "3gp", "mkv", "dat", "webm", "avi", "mpg", "mpeg");
    if (!in_array($vidio_ekstensi, $ekstensi_yang_diperbolehkan)) {
      $error = "Ekstensi yang diperbolehkan adalah mp4,3gp, mkv, dat, webm, avi, mpg, mpeg";
    }
  }

  if (empty($error)) {
    if ($vidio_name) {
      $direktori = "../upload_an";

      @unlink($direktori . "/$vidio"); //delete data

      $vidio_name = "vidio_" . $vidio_name;
      move_uploaded_file($vidio_file, $direktori . "/" . $vidio_name);

      $vidio = $vidio_name;
    } else {
      $vidio_name = $vidio; //memasukkan data dari data yang sebelumnya ada
    }

    if ($id != "") {
      $sql1   = "update tb_galeri_vidio set judul = '$judul',vidio='$vidio_name',waktu=now() where id = '$id'";
    } else {
      $sql1       = "insert into tb_galeri_vidio(judul,vidio) values ('$judul','$vidio_name')";
    }

    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
      $sukses     = "Sukses memasukkan data";
    } else {
      $error      = "Gagal masukkan data";
    }
  }
}


?>
<h1>Halaman Admin Input Data Galeri Vidio</h1>
<div class="mb-3 row">
  <a href="crud_galeri_vidio.php">
    << Kembali ke halaman admin Galeri Vidio</a>
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
<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="judul" value="<?php echo $judul ?>" name="judul">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="vidio" class="col-sm-2 col-form-label">Vidio</label>
    <div class="col-sm-10">
      <?php
      if ($vidio) {
        echo "<img src='../upload_an/$vidio' style='max-height:100px;max-width:100px'/>";
      }
      ?>
      <input type="file" class="form-control" id="vidio" name="vidio">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
    </div>
  </div>
</form>
<?php include("inc_footer.php") ?>