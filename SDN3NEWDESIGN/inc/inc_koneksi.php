<<<<<<< HEAD
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'db_sdn3pwtkidul';
$koneksi = mysqli_connect($server, $username, $password, $db_name);

if ($koneksi->connect_error) {
  die("Connection failed: " . $koneksi->connect_error);
}
=======
<?php
$server ='localhost';
$username ='root';
$password ='';
$db_name ='sdn3pwtkidul';
$koneksi = mysqli_connect($server, $username, $password, $db_name);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
  }
?>
>>>>>>> 769fcf9918192893ee456d70518fc29dabfff80c
