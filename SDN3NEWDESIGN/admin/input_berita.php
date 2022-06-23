<?php include("inc_header.php") ?>
<?php
// deklarasikan semua variabel agar tidak error
$judul        = "";
$gambar       = "";
$deskripsi    = "";
$error        = "";
$sukses       = "";

if (isset($_GET['id'])) {
  $id     = $_GET['id'];
} else {
  $id = "";
}

if ($id != "") {
  $sql1       = "select * from tb_berita where id = '$id'";
  $q1         = mysqli_query($koneksi, $sql1);
  $r1         = mysqli_fetch_array($q1);
  $judul      = $r1['$judul'];
  $gambar     = $r1['$gambar'];
  $deskripsi  = $r1['deskripsi'];

  if ($judul == '') {
    $error = "Data tidak ditemukan";
  }
}

// untuk menyimpan semua yang di input
if (isset($_POST['simpan'])) {
  $judul           = $_POST['judul'];
  $gambar          = $_POST['gambar'];
  $deskripsi       = $_POST['deskripsi'];

  // jika tidak ada yang diinputkan tetapi menekan tombol simpan, maka akan terjadi error
  if ($judul == '' or $deskripsi == '' or $gambar == '') {
    $error      = "Silahkan Masukan Judul dan Deskripsi";
  }



  // Fungsi untuk memasukan data ke database phpmyadmin
  if (empty($error)) {
    if ($id != "") {
      $sql1 = "update berita set judul = '$judul', gambar = '$gambar', deskripsi = '$deskripsi', tgl_isi=now() where id = '$id'";
    } else {
      $sql1       = "insert into tb_berita(judul,gambar,deskripsi) values('$judul', '$gambar', '$deskripsi')";
    }

    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
      $sukses     = "Sukses memasukan data";
    } else {
      $error      = "gagal memasukan data";
    }
  }
}
?>
<h1>Halaman Admin Input Berita</h1>
<div class="mb-3 row">
  <a href="berita.php">
    << Kembali ke Halaman Berita</a>
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
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="judul" value="<?php echo $judul ?>" name="judul">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
    <div class="col-sm-10">
      <textarea name="gambar" class="form-control" id="summernote"> <?php echo $gambar ?> </textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
      <textarea name="deskripsi" class="form-control" id="deskripsi"> <?php echo $deskripsi ?> </textarea>
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