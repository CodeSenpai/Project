<?php
echo'TK'.strtoupper(date('M')).rand(000,9999)

?>

<?php

$host= "localhost";
$user = "root";
$pass = "";
$database = "catering";
$db = mysqli_connect("$host","$user","$pass","$database");
if(mysqli_connect_error()){
    echo 'gagal melakukan koneksi ke database: '.mysqli_connect_error();
}

$kueri = mysqli_query($db, "SELECT * FROM users");
 
 	$data = array ();
 	while (($row = mysqli_fetch_array($kueri)) != null){
 		$data[] = $row;
 	}
 		$cont = count ($data);
 		echo "" . $cont;
?>