<?php
function url_dasar()
{
  // $_SERVER['SERVER_NAME'] : untuk nama alamat websitenya
  // dirname($_SERVER['SCRIPT_NAME']) : untuk direktori website,misalkan sdn3.com/berita/
  $url_dasar = "https://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
  return $url_dasar;
}
function ambil_gambar($id_gambar)
{
  global $koneksi;
  $sql1 = "select * from tb_berita where id = '$id_gambar'";
  $q1   = mysqli_query($koneksi, $sql1);
  $r1   = mysqli_fetch_array($q1);
  $text = $r1['gambar'];

  preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
  $gambar = $img[1];
  $gambar = str_replace("../assets/img/upload_an/", url_dasar() . "/assets/img/upload_an/", $gambar);

  return $gambar;
}