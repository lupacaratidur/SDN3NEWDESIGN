<?php include("inc_header.php") ?>
<?php
$konten        = "";
$nama          = "";
$error         = "";
$sukses        = "";


if (isset($_POST['simpan'])) {
    $konten     = $_POST['konten'];
    $nama       = $_POST['nama'];

    if ($konten == '' or $nama == '') {
        $error      = "Silahkan Masukan Konten dan Nama";
    }

    if (empty($error)) {
        $sql1       = "insert into sambutan(konten,nama) values('$konten', '$nama')";
        $q1         = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $sukses     = "Sukses memasukan data";
        } else {
            $error      = "gagal memasukan data";
        }
    }
}
?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        << Kembali ke Halaman Admin</a>
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
        <label for="konten" class="col-sm-2 col-form-label">Konten</label>
        <div class="col-sm-10">
            <textarea name="konten" class="form-control" id="summernote"> <?php echo $konten ?> </textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" id="judul" value="<?php echo $nama ?>" name="nama">
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