<?php
require '../config.php';
$produk = mysqli_query($db, "SELECT * FROM produk");
$i = 1;
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
                    <a class="nav-link text-white" href="pesanan.php"><i class="fas fa-money-check-alt"></i> Daftar
                        Pesanan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="laporan.php"><i class="fas fa-chart-bar"></i> Bukti
                        Pembayaran</a>
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
            <h3><i class="fas fa-box-open mr-2"></i> PAKET</h3>
            <hr>

            <a href="tambahpaket.php" class="btn btn-primary"><i class="fas fa-box-open mr-2"> TAMBAH PAKET</i></a>
            <br>

            <br>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAMA PAKET</th>
                        <th scope="col">DESKRIPSI</th>
                        <th scope="col">GAMBAR</th>
                        <th scope="col">HARGA</th>
                        <th colspan="1" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($produk)): ?>
                    <tr>
                        <td><?=$i;?></td>
                        <td><?=$row["nproduk"];?></td>
                        <td><?=$row["deskripsi"];?></td>
                        <td><img src="../bootstrap/images/<?=$row["gambar"]?>" width="100" height="100"> </td>
                        <td><?=$row["harga"];?></td>
                        <td align="center">
                            <a href="edit.php?id=<?=$row["id_produk"];?>" onclick"=return confirm('yakin')
                                class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>
                            <a href="hapus.php?id_produk=<?=$row["id_produk"];?>" class="btn btn-danger"><i
                                    class="fa fa-trash-o"></i>Delete</a>
                        </td>
                    </tr>
                    <?php $i++;?>
                    <?php endwhile;?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
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