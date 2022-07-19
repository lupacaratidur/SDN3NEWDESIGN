<?php
function url_dasar()
{
  //$_SERVER['SERVER_NAME'] : alamat website, misalkan websitemu.com
  // $_SERVER['SCRIPT_NAME'] : directory website, websitemu.com/blog/ $_SERVER['SCRIPT_NAME'] : blog
  $url_dasar  = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['SCRIPT_NAME']);
  return $url_dasar;
}
function ambil_gambar($id)
{
  global $koneksi;
  $sql1 = "select * from tb_sambutan where id = '$id'";
  $q1   = mysqli_query($koneksi, $sql1);
  $r1   = mysqli_fetch_array($q1);
  $text = $r1['foto'];

  preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $text, $img);
  $foto = $img[1]; // ../gambar/filename.jpg
  $foto = str_replace("../upload_an/", url_dasar() . "/upload_an/", $foto);
  return $foto;
}

function ambil_isi_sambutan($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_sambutan where id = '$id_tulisan'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $text   = $r1['sambutan'];
  return $text;
}

function ambil_nama_sambutan($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_sambutan where id = '$id_tulisan'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $text   = $r1['nama'];
  return $text;
}

function ambil_foto_sambutan($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_sambutan where id = '$id_tulisan' ";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}


function bersihkan_judul($judul)
{
  $judul_baru     = strtolower($judul);
  $judul_baru     = preg_replace("/[^a-zA-Z0-9\s]/", "", $judul_baru);
  $judul_baru     = str_replace(" ", "-", $judul_baru);
  return $judul_baru;
}

function buat_link_halaman($id)
{
  global $koneksi;
  $sql1    = "select * from halaman where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $judul  = bersihkan_judul($r1['judul']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/halaman.php/$id/$judul";
}

function dapatkan_id()
{
  $id     = "";
  if (isset($_SERVER['PATH_INFO'])) {
    $id = dirname($_SERVER['PATH_INFO']);
    $id = preg_replace("/[^0-9]/", "", $id);
  }
  return $id;
}


function maximum_kata($isi, $maximum)
{
  $array_isi = explode(" ", $isi);
  $array_isi = array_slice($array_isi, 0, $maximum);
  $isi = implode(" ", $array_isi);
  return $isi;
}

//menampilkan foto dari database untuk sambutan
function sambutan_foto($id)
{
  global $koneksi;
  $sql1   = "select * from tb_sambutan where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}

//BERITA
function berita_foto($id)
{
  global $koneksi;
  $sql1   = "select * from tb_berita where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}


function set_isi($isi)
{
  $isi    = str_replace("../upload_an/", url_dasar() . "/upload_an/", $isi);
  return $isi;
}


function buat_link_berita($id)
{
  global $koneksi;
  $sql1    = "select * from tb_berita where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $judul  = bersihkan_judul($r1['judul']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/berita.php/$id/$judul";
}
//AKHIR BERITA


//EKSTRAKULIKULER
function buat_link_ekstrakulikuler($id)
{
  global $koneksi;
  $sql1    = "select * from tb_ekstrakulikuler where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $nama  = bersihkan_judul($r1['nama']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/crud_ekstrakulikuler.php/$id/$nama";
}
//menampilkan foto dari database untuk ekstrakulikuler
function ekstrakulikuler_foto($id)
{
  global $koneksi;
  $sql1   = "select * from tb_ekstrakulikuler where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}


//KONTAK
function ambil_alamat($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_kontak where id = '$id_tulisan'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $text   = $r1['alamat'];
  return $text;
}

function ambil_email($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_kontak where id = '$id_tulisan'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $text   = $r1['email'];
  return $text;
}

function ambil_telepon($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_kontak where id = '$id_tulisan'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $text   = $r1['telepon'];
  return $text;
}
//AKHIR KONTAK


//PRESTASI
function buat_link_prestasi($id)
{
  global $koneksi;
  $sql1    = "select * from tb_prestasi where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $prestasi  = bersihkan_judul($r1['prestasi']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/crud_prestasi.php/$id/$prestasi";
}

//menampilkan foto dari database untuk prestasi
function prestasi_foto($id)
{
  global $koneksi;
  $sql1   = "select * from tb_prestasi where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}
//AKHIR PRESTASI



//GURU GURU
function buat_link_guruguru($id)
{
  global $koneksi;
  $sql1    = "select * from tb_guruguru where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $nama  = bersihkan_judul($r1['$nama']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/crud_prestasi.php/$id/$nama";
}

//menampilkan foto dari database untuk guru
function guruguru_foto($id)
{
  global $koneksi;
  $sql1   = "select * from tb_guruguru where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}
//AKHIR GURUGURU


//VISI MISI
function ambil_visi($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_visimisi where id = '$id_tulisan'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $text   = $r1['visi'];
  return $text;
}

function ambil_misi($id_tulisan)
{
  global $koneksi;
  $sql1   = "select * from tb_visimisi where id = '$id_tulisan'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $text   = $r1['misi'];
  return $text;
}
//AKHIR VISI MISI


//FASILITAS
function buat_link_fasilitas($id)
{
  global $koneksi;
  $sql1    = "select * from tb_fasilitas where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $nama  = bersihkan_judul($r1['$nama']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/crud_fasilitas.php/$id/$nama";
}

//menampilkan foto dari database untuk fasilitas
function fasilitas_foto($id)
{
  global $koneksi;
  $sql1   = "select * from tb_fasilitas where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}
//AKHIR FASILITAS


//GALERI FOTO
function buat_link_galeri_foto($id)
{
  global $koneksi;
  $sql1    = "select * from tb_galeri_foto where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $nama  = bersihkan_judul($r1['$nama']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/crud_galeri_foto.php/$id/$nama";
}

//menampilkan foto dari database untuk galeri foto
function galerifoto_foto($id)
{
  global $koneksi;
  $sql1   = "select * from tb_galeri_foto where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $foto   = $r1['foto'];

  if ($foto) {
    return $foto;
  } else {
    return 'default_user.png';
  }
}


//GALERI VIDIO
function buat_link_galeri_vidio($id)
{
  global $koneksi;
  $sql1    = "select * from tb_galeri_vidio where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $judul  = bersihkan_judul($r1['$judul']);
  // http://localhost/website-company-profile/halaman.php/8/judul
  return url_dasar() . "/crud_galeri_vidio.php/$id/$judul";
}

//menampilkan foto dari database untuk galeri vidio
function galerividio_vidio($id)
{
  global $koneksi;
  $sql1   = "select * from tb_galeri_vidio where id = '$id'";
  $q1     = mysqli_query($koneksi, $sql1);
  $r1     = mysqli_fetch_array($q1);
  $vidio   = $r1['vidio'];

  if ($vidio) {
    return $vidio;
  } else {
    return 'default_user.png';
  }
}