<?php
session_start();
require 'config.php';
$id=$_GET['id'];
$produk = mysqli_query($db,"SELECT * FROM produk WHERE ID = '$id'");
$data = mysqli_fetch_array($produk);
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

    <div id="wrapper">
				
		<!-- start: Container -->
		<div class="container">
 <?php
             if(isset($_GET['aksi']) == 'delete'){
				$id = $_GET['id'];
				$produk = mysqli_query($db, "SELECT * FROM produk WHERE id='$id' AND session='$_SESSION[id]'");
                $data = mysqli_fetch_array($produk);
                $moq = $data['qty'];
				if(mysqli_num_rows($produk) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($db, "DELETE FROM produk WHERE id='$id' AND session='$_SESSION[id]'");
					if($delete){
					    $less_produk = mysqli_query($db, "UPDATE produk SET stok=(stok+'$moq') WHERE id='$id'");
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}
			?>
            
 <?php
             if(isset($_GET['add']) == 'add'){
				$id_add = $_GET['kd1'];
                $qty = 1;
				$produk1 = mysqli_query($db, "SELECT * FROM produk WHERE id='$id_add' AND session='$_SESSION[id]'");
				$test = mysqli_fetch_array($produk1);
                $harga = $test['harga'];
                $quan = $test['qty'];
                $qtot = $qty + $quan;
                $jum = $harga * $qtot;
                if(mysqli_num_rows($produk1) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$add = mysqli_query($db, "UPDATE produk SET qty=(qty+'$qty'), jumlah='$jum' WHERE id='$id_add' AND session='$_SESSION[id]'");
					if($add){
					    $add_produk = mysqli_query($db, "UPDATE produk SET stok=(stok-'$qty') WHERE id='$id_add'");
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Qty Produk berhasil ditambah</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Qty produk gagal ditambah !</div>';
					}
				}
			}
			?>
            
 <?php
             if(isset($_GET['less']) == 'less'){
				$id_less = $_GET['id'];
                $qty1 = 1;
				$produk2 = mysqli_query($db, "SELECT * FROM produk WHERE id='$id_less' AND session='$_SESSION[id]'");
				$test1 = mysqli_fetch_array($produk2);
                $harga1 = $test1['harga'];
                $quan1 = $test1['qty'];
                $qtot1 = $quan1 - $qty1;
                $jum1 = $harga1 * $qtot1;
                if(mysqli_num_rows($produk2) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$less = mysqli_query($db, "UPDATE produk SET qty=(qty-'$qty1'), jumlah='$jum1' WHERE id='$id_less' AND session='$_SESSION[id]'");
					if($less){
					    $less_produk = mysqli_query($db, "UPDATE produk SET stok=(stok+'$qty1') WHERE kode='$id_less'");
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Qty Produk berhasil dikurangi.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Qty Produk gagal dikurangi !</div>';
					}
				}
			}
			?>
			<!-- start: Table -->
            <div class="title"><h3>Keranjang Belanja</h3></div>
<table class="table table-hover table-condensed">
<tr>
					<th><center>Nomor PO</center></th>
					<th><center>Nama Makanan</center></th>
						<th><center>Price</center></th>
				  <th><center>Quatity</center></th>
					<th><center>Sub Total</center></th>
					<th><center>Quantity Option</center></th>
				</tr>
			    <?php
				//MENAMPILKAN DETAIL KERANJANG BELANJA//
               
    
    //mysql_select_db($database_conn, $conn);
		   
         
                    $sql = mysqli_query($db, "SELECT * FROM produk WHERE session='$_SESSION[id]'");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql)){
                    $no++; 
            ?>
            
                <tr>
                <td><center><?php echo $no; ?></center></td>
                <td><center><?php echo $data['kode']; ?></center></td>
                <td><center><?php echo $data['nama']; ?></center></td>
				  <td><center>Rp. <?php echo number_format($data['harga']); ?></center></td>
                <td><center><?php echo number_format($data['qty']); ?></center></td>
                <td><center>Rp. <?php echo number_format($data['jumlah']); ?></center></td>
                <td><center><a href="detail.php?add=add&kd1=<?php echo $data['kode']; ?>" class="btn btn-xs btn-success">Add</a> <a href="detail.php?less=less&kd2=<?php echo $data['kode']; ?>" class="btn btn-xs btn-warning">Less</a> <a href="detail.php?aksi=delete&kd=<?php echo $data['kode']; ?>" class="btn btn-xs btn-danger">Delete</a></center></td>
                </tr>
                
					
                         <?php
                         }
                         $sqlku = mysqli_query($db, "SELECT SUM(jumlah) AS total FROM produk WHERE session='$_SESSION[id]'");
                         $dataku = mysqli_fetch_array($sqlku);
                         $total = $dataku['total'];
				if($total == 0){
					echo '<tr><td colspan="5" align="center">produk Empty!</td></tr></table>';
					echo '<p><div align="right">
						<a href="produk.php" class="btn btn-primary btn-lg">&laquo; Continue Shopping</a>
						</div></p>';
				} else {
					echo '
						<tr style="background-color: #DDD;"><td colspan="6" align="right"><b>Total :</b></td><td align="right"><b>Rp. '.number_format($total,2,",",".").'</b></td></td></td><td></td></tr></table>
						<p><div align="right">
						<a href="produk.php" class="btn">&laquo; CONTINUE SHOPPING</a>
						<a href="checkout2.php?total='.$total.'" class="btn"><i class="glyphicon glyphicon-shopping-produk icon-white"></i> CHECK OUT &raquo;</a>
						</div></p>
					';
				}
				
					
				
				?>

</table>
			
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
</body>
<br>
<br>
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
                            <li><a class="text-white" href="index.php"><i class="fa fa-angle-double-right"></i> Home</a>
                            </li>
                            <li><a class="text-white" href="menu.php"><i class="fa fa-angle-double-right"></i> Menu</a>
                            </li>
                            <li><a class="text-white" href="konfirmasi.php"><i class="fa fa-angle-double-right"></i>
                                    Bukti
                                    Pembayaran</a></li>
                            <li><a class="text-white" href="contactus.php"><i class="fa fa-angle-double-right"></i>
                                    Hubungi Kami </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-10 col-sm-3 col-md-3">
                        <h4 class="text-white">Metode Pembayaran</h4>
                        <ul class="list-unstyled quick-links text-white">
                            <li><a class="text-white" href="index.php"><i class="fa fa-angle-double-right"></i> Home</a>
                            </li>
                            <li><a class="text-white" href="menu.php"><i class="fa fa-angle-double-right"></i> Menu</a>
                            </li>
                            <li><a class="text-white" href="konfirmasi.php"><i class="fa fa-angle-double-right"></i>
                                    Bukti
                                    Pembayaran</a></li>
                            <li><a class="text-white" href="contactus.php"><i class="fa fa-angle-double-right"></i>
                                    Hubungi Kami </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-10 col-sm-3 col-md-3">
                        <h4 class="text-white">Hubungi Kami</h4>
                        <ul class="list-unstyled quick-links">
                            <li><a class="text-white" href="javascript:void();"><i class="fa fa-phone-square"></i> +62
                                    85735877771</a>
                            </li>
                            <li><a class="text-white" href="javascript:void();"><i class="fa fa-street-view"></i> Jl.
                                    Selamat No.153
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