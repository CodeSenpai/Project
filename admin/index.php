<?php
session_start();
include '../config.php';
if(isset($_POST["login"])){
   $username = $_POST["username"];
   $password = $_POST["password"];
   $query = mysqli_query($db,"SELECT * FROM admin WHERE username='$username'");
   $row = mysqli_num_rows($query);
    if($row == 1){
        if($password==123){
            $_SESSION["login"]=$_POST;
            $_SESSION["status"]=true;
            header('location:dashboard.php');
            exit;
         }
   }
   $error=true;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="/admin/admin.css">

</head>

<body>
    <!--Awal Nav-->
    <!--BatasNav-->
    <div class="container style="margin-top:10%">
        <div class="row col-md-10 justify-content-center mt-5 ml-5">
                <div class="row border-box">
                        <div class="card">
                            <div class="card-header">
                                <div class="sub-title">
                                    Masuk panel administrator
                                </div>
                            </div>
                            <div class="card-body">
                            <?php if(isset($error)): ?>
                            <script>
                           alert('username atau password salah');
                            </script>
                            <?php endif; ?>
                                <form class="lockscreen-credentials" action="" method="post">
                                    <div class="input-group">
                                        <input type="hidden" name="username" class="form-control" placeholder="username"
                                            value="admin">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i>
                                        </div>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="password" autofocus>

                                        <div class="input-group-btn">
                                            <button name="login" class="btn bg-success ml-2">Masuk</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<!--
<footer>
    <div class="top-footer" Style=" background-color:#333333">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-sm-4 footer-logo">
                    <br>
                    <figure>
                        <a class="img-responsive" title='Madang' rel='home'>
                            <img src='../bootstrap/img/kuy.png' alt='Madang' width="190" height="80"
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

INI BAGIAN AKHIR FOOTER-->
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