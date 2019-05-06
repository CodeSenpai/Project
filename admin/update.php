<?php
include '../config.php';
$id = $_POST['id'];
$nproduk = $_POST['nproduk'];
$deskripsi = $_POST['deksripsi'];
$gambar = $_POST['gambar'];
$harga = $_POST['harga'];

$query = "UPDATE produk SET
								nproduk = '$produk',
								deskripsi = '$deskripsi',
								gambar = '$gambar',
								harga = '$harga'
								WHERE id = '$id'
                                ";
  
  mysqli_query($db,$query)
  or die ("Gagal Perintah SQL".mysql_error());
  header('location:tambahpaket.php');
?>