<?php
include("inc_header.php")
?>

<?php
$alamat      = "";
$email        = "";
$telepon      = "";
$error      = "";
$sukses     = "";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
}

if ($id != "") {
  $sql1   = "select * from tb_kontak where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $alamat = $r1['alamat'];
  $email  = $r1['email'];
  $telepon = $r1['telepon'];

  if ($email == '') {
    $error  = "Data tidak ditemukan";
  }
}

if (isset($_POST['simpan'])) {
  $alamat      = $_POST['alamat'];
  $email        = $_POST['email'];
  $telepon       = $_POST['telepon'];

  if ($alamat == '' or $email == '' or $telepon == '') {
    $error     = "Silakan masukkan semua data yakni adalah data email, alamat, dan telepon.";
  }

  if (empty($error)) {
    if ($id != "") {
      $sql1   = "update tb_kontak set alamat = '$alamat',email='$email',telepon = '$telepon', waktu=now() where id = '$id'";
    } else {
      $sql1       = "insert into tb_kontak(alamat,email,telepon) values ('$alamat','$email','$telepon')";
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
<h1>Kontak Admin Input Data</h1>
<div class="mb-3 row">
  <a href="crud_kontak.php">
    << Kembali ke Kontak admin</a>
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
<form action="" method="post">
  <div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" value="<?php echo $alamat ?>" name="alamat">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" value="<?php echo $email ?>" name="email">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telepon" value="<?php echo $telepon ?>" name="telepon">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
    </div>
  </div>
</form>






<?php
include("inc_footer.php")
?>