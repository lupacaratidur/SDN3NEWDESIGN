<?php include("inc_header.php") ?>
<?php
$prestasi   = "";

$foto       = "";
$foto_name  = "";

$error      = "";
$sukses     = "";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
}

if ($id != "") {
  $sql1   = "select * from tb_prestasi where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $prestasi   = $r1['prestasi'];


  if ($prestasi == '') {
    $error  = "Data tidak ditemukan";
  }
}

if (isset($_POST['simpan'])) {

  $prestasi  = $_POST['prestasi'];


  if ($prestasi == '') {
    $error     = "Silakan masukkan data prestasi.";
  }
  //Array ( [foto] => Array ( [name] => Budi Rahardjo.jpg [type] => image/jpeg [tmp_name] => C:\xampp2\tmp\php4FDD.tmp [error] => 0 [size] => 2375701 ) )
  // print_r($_FILES);
  if ($_FILES['foto']['name']) {
    $foto_name = $_FILES['foto']['name'];
    $foto_file = $_FILES['foto']['tmp_name'];

    $detail_file = pathinfo($foto_name);
    $foto_ekstensi = $detail_file['extension'];
    // Array ( [dirname] => . [basename] => Romi Satrio Wahono.jpg [extension] => jpg [filename] => Romi Satrio Wahono )
    $ekstensi_yang_diperbolehkan = array("jpg", "jpeg", "png", "gif");
    if (!in_array($foto_ekstensi, $ekstensi_yang_diperbolehkan)) {
      $error = "Ekstensi yang diperbolehkan adalah jpg, jpeg, png dan gif";
    }
  }

  if (empty($error)) {
    if ($foto_name) {
      $direktori = "../upload_an";

      @unlink($direktori . "/$foto"); //delete data

      $foto_name = "prestasi_" . $foto_name;
      move_uploaded_file($foto_file, $direktori . "/" . $foto_name);

      $foto = $foto_name;
    } else {
      $foto_name = $foto; //memasukkan data dari data yang sebelumnya ada
    }

    if ($id != "") {
      $sql1   = "update tb_prestasi set prestasi= '$prestasi, 'foto='$foto_name',waktu=now() where id = '$id'";
    } else {
      $sql1       = "insert into tb_prestasi(prestasi,foto) values ('$prestasi', '$foto_name')";
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
<h1>Halaman Admin Input Data Prestasi</h1>
<div class="mb-3 row">
  <a href="crud_prestasi.php">
    << Kembali ke halaman admin Prestasi</a>
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
    <label for="prestasi" class="col-sm-2 col-form-label">Prestasi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="prestasi" value="<?php echo $prestasi ?>" name="prestasi">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-10">
      <?php
      if ($foto) {
        echo "<img src='../upload_an/$foto' style='max-height:100px;max-width:100px'/>";
      }
      ?>
      <input type="file" class="form-control" id="foto" name="foto">
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