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
                    <a class="nav-link text-white" href="customer/login.php"> Login</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
    <!--INI BAGIAN AKHIR NAVBAR-->
    <?php

if ( isset($_POST['submit']) ){

    $email     =$_POST['email'];
    $subject   =$_POST['subject'];
    $pesan     =$_POST['pesan'];
    
    die ( $email .'' .$subject.''. $pesan);
    if (mail ($email, $subject, $pesan) ){
        echo 'email berhasil dikirim';
    }else{
        echo 'email gagal dikirim';
    }    
}



?>
    <!--INI BAGIAN AWAL CONTACT US-->
    <div class="container">
        <div class="text-center  mt-4">
            <h4>Hubungi Kami</h4>
        </div>
        <br>
        <form id="form-group" method="post" action="contactus.php">
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-3 offset-md-3">
                        <form class="form-horizontal"></form>
                        <div class="form-group">
                            <label for="form_email">Email</label>
                            <input id="form_email" type="text" name="email" class="form-control"
                                placeholder="Masukan Email" required="required" data-error="email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="form_subject">Subject</label>
                            <input id="form_subject" type="text" name="subject" class="form-control"
                                placeholder="Masukan Subject" required="required" data-error="subject is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="form_pesan">Pesan</label>
                            <textarea id="form_pesan" name="pesan" class="form-control"
                                placeholder="Tuliskan pesan anda *" rows="4" required="required"
                                data-error="Please, leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-3 mb-3 offset-md-8" value="Kirim">
                </div>
            </div>
        </form>
    </div>
    </form>
</body>
<!--INI BAGIAN ANKHIR CONTACT US-->

<!--INI BAGIAN AWAL FOOTER-->
<footer>
    <div class="top-footer" Style=" background-color:#18A874">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 footer-logo">
                    <br>
                    <figure>
                        <a class="img-responsive" title='Madang' rel='home'>
                            <img src='bootstrap/img/kuy.png' alt='Madang' width="190" height="80"
                                style="padding-bottom: 10px;"></a>
                    </figure>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <div class="border-bottom-0">
                        <ul>
                            <br>
                            <a class="text-white" href="#!">Link 1</a>
                        </ul>
                        <ul>
                            <a class="text-white" href="#!">Link 1</a>
                        </ul>
                        <ul>
                            <a class="text-white" href="#!">Link 1</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-12">
            <div class="text-white">
                <div class="copyright-text text-center">&copy;2019 Medan, Inc. ALL
                    RIGHT RESERVED.</div>
            </div>
            <br>
        </div>
    </div>
    </div>
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