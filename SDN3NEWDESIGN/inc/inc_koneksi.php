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