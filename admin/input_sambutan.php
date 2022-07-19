<?php include("inc_header.php") ?>
<?php
// deklarasikan semua variabel agar tidak error
$nama        = "";
$isi          = "";
$foto         = "";
$error        = "";
$sukses       = "";

if (isset($_GET['id'])) {
  $id     = $_GET['id'];
} else {
  $id = "";
}

if ($id != "") {
  $sql1       = "select * from tb_sambutan where id = '$id'";
  $q1         = mysqli_query($koneksi, $sql1);
  $r1         = mysqli_fetch_array($q1);
  $isi        = $r1['isi'];
  $nama       = $r1['nama'];
  $foto       = $r1['foto'];

  if ($nama == '') {
    $error = "Data tidak ditemukan";
  }
}

// untuk menyimpan semua yang di input
if (isset($_POST['simpan'])) {
  $isi             = $_POST['isi'];
  $nama            = $_POST['nama'];
  $foto            = $_POST['foto'];
}

if ($nama == '' or $isi == '') {
  $error     = "Silakan masukkan semua data yakni adalah data isi dan nama.";
}
// Array ( [foto] => Array ( [name] => [type] => [tmp_name] => [error] => 4 [size] => 0 ) )
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
    $direktori = "../upload_an/";
    @unlink($direktori . "/$foto"); //delete data
    $foto_name = "sambutan_" . time() . "_" . $foto_name;
    move_uploaded_file($foto_file, $direktori . "/" . $foto_name);

    $foto = $foto_name;
  } else {
    $foto_name = $foto; //memasukkan data dari data yang sebelumnya ada
  }
}



// jika tidak ada yang diinputkan tetapi menekan tombol simpan, maka akan terjadi error
if ($nama == '' or $isi == '' or $foto == '') {
  $error      = "Silahkan Masukan Nama dan isi";
}

// Fungsi untuk memasukan data ke database phpmyadmin
if ($id != "") {
  $sql1 = "update tb_sambutan set nama = '$nama', foto = '$foto', isi = '$isi' where id = '$id'";
} else {
  $sql1       = "insert into tb_sambutan(nama,foto,isi) values('$nama', '$foto', '$isi')";
}

$q1         = mysqli_query($koneksi, $sql1);
if ($q1) {
  $sukses     = "Sukses memasukan data";
} else {
  $error      = "gagal memasukan data";
}




?>
<h1>Halaman Admin Input Sambutan</h1>
<div class="mb-3 row">
  <a href="crud_sambutan.php">
    << Kembali ke Halaman Sambutan</a>
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
    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
    <div class="col-sm-10">
      <textarea name="isi" class="form-control" id="summernote"> <?php echo $isi ?> </textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Nama" value="<?php echo $nama ?>" name="nama">
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