<?php 
session_start();
require '../config.php';

?>

<?php


$kueri1 = mysqli_query($db, "SELECT * FROM users");
 
 	$data1 = array ();
 	while (($row1 = mysqli_fetch_array($kueri1)) != null){
 		$data1[] = $row1;
 	}
         $cont1 = count ($data1);
         
 $kueri = mysqli_query($db, "SELECT * FROM produk");
 
         $data = array ();
         while (($row = mysqli_fetch_array($kueri)) != null){
             $data[] = $row;
         }
             $cont = count ($data);
             

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
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../admin/css/admin.css">
    <title>Tika Catering</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" Style="background-color:#008899">
        <a class="navbar-brand " href="../index.php">SELAMAT DATANG ADMIN | <b>TIKA CATERING</b> </a>
    </nav>
    <div class="row no-gutters">
        <div class="col-md-2 badge-dark mt-1 mpr-3 pt-4">
            <ul class="nav flex-column ml-2">
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
                    <a class="nav-link text-white" href="../buktibayar.php"><i class="fas fa-money-check-alt"></i> Bukti
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
        <div class="col-md-10 p-4">
            <h3><i class="fas fa-chart-bar mr-2"></i> Laporan</h3>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pesan</th>
                                    <th>NIK Pemesan</th>
                                    <th>Nama Pemesan</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Berangkat</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </form>
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