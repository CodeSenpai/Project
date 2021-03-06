<?php
session_start();
include '../config.php';
$i = 1;
$no = 1;
$id = $_GET["id"];
$produk = mysqli_query($db, "SELECT * from produk where id_produk = '$id'");
$row = mysqli_fetch_assoc($produk);
var_dump($row);
$id = $row["id_produk"];
$name = $row["nproduk"];
$desk = $row["deskripsi"];
$gambar = $row["gambar"];
$harga = $row["harga"];

if (isset($_POST["ubah"])) {
    $id_produk = $_POST['id_produk'];
    $nama = $_POST['nproduk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    $query = "UPDATE produk SET `nproduk`='$nama',`deskripsi`='$deskripsi',`harga`='$harga' WHERE `id_produk`='$id_produk'";
    $execute = mysqli_query($db, $query);
    if ($execute) {
        header('location:paket.php');
    } else {
        echo "<script>alert('failed')</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/admin.css">
    <title>Tika Catering</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" Style="background-color:#79c67b">
        <a class="navbar-brand " href="#">SELAMAT DATANG ADMIN | <b>TIKA CATERING</b> </a>
    </nav>

    <div class="row no-gutters mt-5">
        <div class="col-md-2 badge-dark mt-2 mpr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php"><i
                            class="fas fa-tachometer-alt mr-1"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="user.php"><i class="fas fa-user-alt"></i> Daftar Pelanggan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="paket.php"><i class="fas fa-box-open"></i> Paket</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="cekorder.php"><i class="fas fa-money-check-alt"></i> Order</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="laporan.php"><i class="fas fa-chart-bar"></i> Bukti
                        Pesananan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="laporan.php"><i class="fas fa-chart-bar"></i> Laporan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>

        <div class="col-md-10 p-4 pt-2">
            <h3><i class="fas fa-user-alt mr-2"></i> Edit Paket</h3>
            <hr>
            <form role="form" method="post">
                <input type="hidden" name="id_produk" value="<?=$id;?>">
                <input type="hidden" name="gambarlama" value="<?=$row["gambar"];?>">
                <div class="row">
                    <div class="form-group">
                        <label class="control-label ml-3" for="nproduk">Nama Paket</label>
                        <input type="text" name="nproduk" class="form-control ml-3 col-10" id="nama"
                            value="<?=$name;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control ml-1 col-10" value="<?=$desk;?>">
                </div>
                <img src="../bootstrap/images/<?=$gambar;?>" alt="none" width="100" heigth="100">
                <div class="form-group">
                    <label class="control-label" for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control col-4" id="gambar"="file">
                </div>
                <div class="form-group">
                    <label class="control-label" for="harga">Harga</label>
                    <br>
                    <input type="number" name="harga" class="form-control" id="harga"
                        value="<?=$harga;?>">
                </div>
                <button type="submit" name="ubah" class="btn btn-success btn-block ml-3 col-md-2">Ubah</button>
        </div>
        </form>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>