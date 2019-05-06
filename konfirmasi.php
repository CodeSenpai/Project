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
    <!--Awak Nav-->
    <nav class="navbar navbar-expand-lg navbar-light" Style="background-color:#18A874">
        <a class="navbar-brand " href="index.php">
            <img class="img-responsive" src="bootstrap/img/kuy.png" width="170" height="40"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="konfirmasi.php">Bukti Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="contactus.php">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.php"> Login</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
    <!--Batas Nav-->

    <body>
        <div class="container">
            <h4 class="text-center mt-5">KONFIRMASI PEMBAYARAN</h4>
            <hr>

            <form action="" method="POST">
                <div class="form-group col-md-4 offset-md-4">
                    <label>No. Invoice</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-credit-card "></i></div>
                        </div>
                        <input type="kodeorder" name="kodeorder" class="form-control"
                            placeholder="Masukan No Invoice Anda">
                    </div>
                    <br>

                    <div class="form-group">
                        <label>Nama Pemilik Rekening</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-user"></i></div>
                            </div>
                            <input type="rekening" name="rekening" class="form-control"
                                placeholder="Masukan Nama Pemilik Rekening">
                        </div>
                        <br>

                        <div class="form-group">
                            <label>No Rekening</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fas fa-user-circle"></i></div>
                                </div>
                                <input type="norek" name="norek" class="form-control" placeholder="Masukan No Rekening">
                            </div>
                            <br>

                            <div class="form-group">
                                <label>Upload Bukti</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-upload"></i></div>
                                    </div>
                                    <input type="file" name="upload" class="form-control"
                                        placeholder="Masukan Username upload">
                                </div>

                                <br>
                                <div class="form-group">
                                    <label>Total Pembayaran</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-equals"></i></div>
                                        </div>
                                        <input type="totalbayar" name="totalbayar" class="form-control"
                                            placeholder="Jumlah yang di transfer">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>No Handphone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fas fa-phone-square"></i></div>
                                        </div>
                                        <input type="nohp" name="nohp" class="form-control"
                                            placeholder="Masukan No Handphone">
                                    </div>
                                    <button type="upload" name="upload"
                                        class="btn btn-success mt-3 mb-3 offset-md-10">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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