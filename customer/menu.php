<?php
session_start();
include '../config.php';

$produk = mysqli_query($db,"SELECT * FROM produk");
$i = 1;
if (isset($_POST["pesan"])){
    $_SESSION["pesan"] = $_POST;
    var_dump($_SESSION["pesan"]);
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
    <link rel="stylesheet" href="/bootstrap/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <title>Tika Catering</title>
</head>

<style>
    .harga {
        float: left;
        margin-top: 0px;


    }

    .jarak {
        padding-right: 20px;
    }
</style>

<body>
    <!--Awal Nav-->
    <nav class="navbar navbar-expand-lg navbar-light" Style="background-color:#18A874">
        <a class="navbar-brand " href="index.php">
            <img class="img-responsive" src="../bootstrap/img/kuy.png" width="170" height="40"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="konfirmasi.php">Bukti Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="keranjang.php">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php"> hi,rian</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
    <!--Batas Nav-->
    <!--INI BAGIAN AKHIR NAVBAR-->

    <!--INI BAGIAN AWAL MENU MAKANAN-->
    <div id="menu">
        <div class="text text-uppercase text-sp text-center">
            <br>
            <h4>Silahkan Pilih Paket Makanan Anda</h4>
            <hr>
        </div>
    </div>
    <br>
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($produk)): ?>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pl-2 pr-2">
                    <div class="post card card-post mb-4 box-shadow">
                        <img width="100" height="150" src="../bootstrap/images/<?=$row["gambar"]; ?>"
                            class="card-img-top post-sampul wp-post-image" alt="" />

                        <div class="card-body">
                            <article>
                                <h2 class="text-center mb-3">
                                    <a class="text-dark"><?=$row["nproduk"]; ?></a>
                                </h2>

                                <?php $i++; ?>
                            </article>
                            <p><a class="text-dark"><?=rupiah($row ["harga"]); ?></a></p>
                            <hr>
                            <tbody>
                                <tr>
                                    <td><a href="detail.php?id=<?=$row["id"]; ?>"
                                            class="btn btn-primary offset-md-2">Detail</a>
                                <td> <a href="keranjang.php?id=<?=$row["id"]; ?>" class="btn btn-success ml-3">Beli</a></td>
                                    </td>
                                </tr>
                            </tbody>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </form>
</body>

<footer>
  <div class="top-footer" Style=" background-color:#18A874">
    <section id="footer">
      <div class="container">
        <br>
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-10 col-sm-3 col-md-3">
            <div class="col-xs-4 col-sm-4 footer-logo">
              <br>
              <figure>
                <a class="img-responsive" title='Madang' rel='home'>
                  <img src='../bootstrap/img/kuy.png' alt='Madang' width="190" height="80"></a>
              </figure>
            </div>
          </div>
          <div class="col-xs-10 col-sm-3 col-md-3">
            <h4 class="text-white">Navigasi</h4>
            <ul class="list-unstyled quick-links text-white">
              <li><a class="text-white" href="index.php"><i class="fa fa-angle-double-right"></i> Home</a></li>
              <li><a class="text-white" href="menu.php"><i class="fa fa-angle-double-right"></i> Menu</a></li>
              <li><a class="text-white" href="konfirmasi.php"><i class="fa fa-angle-double-right"></i> Bukti
                  Pembayaran</a></li>
              <li><a class="text-white" href="contactus.php"><i class="fa fa-angle-double-right"></i> Hubungi Kami </a>
              </li>
            </ul>
          </div>
          <div class="col-xs-10 col-sm-3 col-md-3">
            <h4 class="text-white">Metode Pembayaran</h4>
            <ul class="list-unstyled quick-links text-white">
              <li><a class="text-white" href="index.php"><i class="fa fa-angle-double-right"></i> Home</a></li>
              <li><a class="text-white" href="menu.php"><i class="fa fa-angle-double-right"></i> Menu</a></li>
              <li><a class="text-white" href="konfirmasi.php"><i class="fa fa-angle-double-right"></i> Bukti
                  Pembayaran</a></li>
              <li><a class="text-white" href="contactus.php"><i class="fa fa-angle-double-right"></i> Hubungi Kami </a>
              </li>
            </ul>
          </div>
          <div class="col-xs-10 col-sm-3 col-md-3">
            <h4 class="text-white">Hubungi Kami</h4>
            <ul class="list-unstyled quick-links">
              <li><a class="text-white" href="javascript:void();"><i class="fa fa-phone-square"></i> +62 85735877771</a>
              </li>
              <li><a class="text-white" href="javascript:void();"><i class="fa fa-street-view"></i> Jl. Selamat No.153
                  Kelurahan Sitirejo II Kecamatan Medan Amplas, Kota Medan.</a></li>

            </ul>
          </div>
        </div>


        <div class="col-12">
          <div class="text-white">
            <div class="copyright-text text-center">&copy;2019 Medan, Inc. ALL
              RIGHT RESERVED.</div>
          </div>
          <br>
        </div>
      </div>
    </section>
</footer>

<!-- Footer -->

<!-- Footer -->
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