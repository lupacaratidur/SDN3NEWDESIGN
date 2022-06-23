<?php include("inc_header.php") ?>
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
  $sql1 = "delete from tb_berita where id = '$id'";
  $q1   = mysqli_query($koneksi, $sql1);
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
      <th>Judul</th>
      <th>Gambar</th>
      <th>Deskripsi</th>
      <th col-2>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $sqltambahan = "";
    $per_berita  = 2;
    //  Fungsi Cari
    if ($katakunci != '') {
      $array_katakunci = explode(" ", $katakunci);
      for ($x = 0; $x < count($array_katakunci); $x++) {
        $sqlcari[] = "(judul like '%" . $array_katakunci[$x] . "%' or deskripsi like '%" . $array_katakunci[$x] . "%' )";
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
      <td><?php echo $r1['gambar'] ?></td>
      <td><?php echo $r1['deskripsi'] ?></td>
      <td>
        <a href="input_berita.php?id=<?php echo $r1['id'] ?>">
          <span class="badge bg-warning" style="color: #000;">Edit</span>
        </a>
        <!-- konfirmasi hapus data menggunakan alert -->
        <a href="berita.php?op=delete&id=<?php echo $r1['id']  ?>"
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
        href="berita.php?katakunci=<?php echo $katakunci ?>&cari=<?php echo $cari ?>&page=<?php echo $i ?>">
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