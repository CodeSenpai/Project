<?php 

include "../config.php";

if(isset($_POST['register'])){
    if(register($_POST)>0){
        echo "<script>alert('data berhasil ditambahkan');</script>";
    }else{
        echo "<script>alert('data gagal ditambahkan');</script>";
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
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Tika Catering</title>
</head>

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
    <div class="container">
        <h4 class="text-center mt-5">Silahkan Isi Form Pendaftaran</h4>
        <form action="" method="POST">
            <div class="form-group col-md-4 offset-md-4">
                <label>Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-user"></i></div>
                    </div>
                    <input type="username" name="username" class="form-control" placeholder="Masukan Username Anda">
                </div>
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                        </div>
                        <input type="nama_lengkap" name="nama_lengkap" class="form-control"
                            placeholder="Masukan Nama Anda">
                    </div>
                    
                    <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                            </div>
                            <input type="email" name="email" class="form-control"
                                placeholder="Masukan Username email">
                        </div>
                        
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-address-card"></i></div>
                                </div>
                                <input type="alamat" name="alamat" class="form-control"
                                    placeholder="Masukan Username alamat">
                            </div>
                            <div class="form-group">
                                <label>No.Handphone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-phone-square"></i></div>
                                    </div>
                                    <input type="no_hp" name="no_hp" class="form-control"
                                        placeholder="Masukan Username no_hp">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
                                        </div>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Masukan Username Password">
                                    </div>
                                    <a href="login.php" class="btn btn-primary mt-3 mb-3 offset-md-6">Login</a>
                                    <button type="register" name="register" class="btn btn-success mt-3 mb-3 ">Register</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </form>

</body>

<!--INI BAGIAN AWAL FOOTER-->
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
                  <img src='bootstrap/img/kuy.png' alt='Madang' width="190" height="80"></a>
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
</footer>5
<!--INI BAGIAN AKHIR FOOTER-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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