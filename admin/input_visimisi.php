<?php
include("inc_header.php")
?>

<?php
$visi       = "";
$misi       = "";
$error      = "";
$sukses     = "";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
}

if ($id != "") {
  $sql1   = "select * from tb_visimisi where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $visi = $r1['visi'];
  $misi  = $r1['misi'];

  if ($visi == '' or $misi == '') {
    $error  = "Data tidak ditemukan";
  }
}

if (isset($_POST['simpan'])) {
  $visi      = $_POST['visi'];
  $misi        = $_POST['misi'];

  if ($visi == '' or $misi == '') {
    $error     = "Silakan masukkan semua data yakni adalah data misi dan visi";
  }

  if (empty($error)) {
    if ($id != "") {
      $sql1       = "update tb_visimisi set visi = '$visi',misi='$misi' , waktu=now() where id = '$id'";
    } else {
      $sql1       = "insert into tb_visimisi(visi,misi) values ('$visi','$misi')";
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
<h1>VisiMisi Admin Input Data</h1>
<div class="mb-3 row">
  <a href="crud_visimisi.php">
    << Kembali ke visi misi admin</a>
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
    <label for="visi" class="col-sm-2 col-form-label">Visi</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="visi" value="<?php echo $visi ?>" name="visi">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="misi" class="col-sm-2 col-form-label">Misi</label>
    <div class="col-sm-10">
      <textarea name="misi" class="form-control" id="summernote"><?php echo $misi ?></textarea>
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