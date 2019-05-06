<?php
include '../config.php';
$id_produk = $_GET['id_produk'];
if (hapusprod($id_produk)){
    echo "<script>alert('Data berhasil dihapus');
    document.location.href='paket.php'</script>";

}
else {
   echo "<script>alert('Data gagal dihapus');</script>";
}
?>