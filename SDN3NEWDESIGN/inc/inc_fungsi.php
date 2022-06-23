<?php 
function ambil_gambar($id_gambar){
  global $koneksi;
  $sql1 = "select * from tb_berita where id = '$id_gambar'";
  $q1   = mysqli_query($koneksi,$sql1);
  $r1   = mysqli_fetch_array($q1);
  $text = $r1['deskripsi'];
}