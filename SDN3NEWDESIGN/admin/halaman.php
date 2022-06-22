<?php include("inc_header.php") ?>
<?php
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : "";
?>
<h1>Halaman Admin</h1>
<p>
    <a href="halaman_input.php">
        <input type="button" class="btn btn-primary" value="Buat Halaman Baru" />
    </a>
</p>
<form class="row g-3" method="get" action="">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukan Kata Kunci" name="katakunci" value="<?php echo $katakunci ?>" />
    </div>
    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary">
    </div>
</form>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>Konten</th>
            <th>Nama</th>
            <th col-2>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sql1       = "select * from halaman order by id desc";
        $q1         = mysqli_query($koneksi, $sql1);
        $nomor      = 1;
        while ($r1 = mysqli_fetch_array($q1)) {
        ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $r1['konten'] ?></td>
                <td><?php echo $r1['nama'] ?></td>
                <td>
                    <span class="badge bg-warning" style="color: #000;">Edit</span>
                    <span class="badge bg-danger">Delete</span>
                </td>
            </tr>

        <?php

        }
        ?>

    </tbody>

</table>
<?php include("inc_footer.php") ?>