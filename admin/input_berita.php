<?php include("inc_header.php") ?>
<?php
// deklarasikan semua variabel agar tidak error
$judul        = "";
$foto         = "";
$isi          = "";
$foto_name    = "";
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
  $judul      = $r1['judul'];
  $foto       = $r1['foto'];
  $isi        = $r1['isi'];

  if ($judul == '') {
    $error = "Data tidak ditemukan";
  }
}

// untuk menyimpan semua yang di input
if (isset($_POST['simpan'])) {
  $judul           = $_POST['judul'];
  $isi             = $_POST['isi'];

  if ($judul == '' or $isi == '') {
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
      $direktori = "../berita/upload_an/";

      @unlink($direktori . "/$foto"); //delete data

      $foto_name = "berita_" . time() . "_" . $foto_name;
      move_uploaded_file($foto_file, $direktori . "/" . $foto_name);

      $foto = $foto_name;
    } else {
      $foto_name = $foto; //memasukkan data dari data yang sebelumnya ada
    }



    // jika tidak ada yang diinputkan tetapi menekan tombol simpan, maka akan terjadi error
    if ($judul == '' or $isi == '' or $foto == '') {
      $error      = "Silahkan Masukan Judul dan isi";
    }

    // Fungsi untuk memasukan data ke database phpmyadmin
    if ($id != "") {
      $sql1 = "update tb_berita set judul = '$judul', foto = '$foto', isi = '$isi' where id = '$id'";
    } else {
      $sql1       = "insert into tb_berita(judul,foto,isi) values('$judul', '$foto', '$isi')";
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
  <a href="crud_berita.php">
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

<form action="" method="post" enctype="multipart/form-data">
  <div class="mb-3 row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="judul" value="<?php echo $judul ?>" name="judul">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-10">
      <?php
      if ($foto) {
        echo "<img src='../berita/upload_an/$foto' style='max-height:100px;max-width:100px'/>";
      }
      ?>
      <input type="file" class="form-control" id="foto" name="foto">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
    <div class="col-sm-10">
      <textarea name="isi" class="form-control" id="summernote"> <?php echo $isi ?> </textarea>
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