<?php
$host= "localhost";
$user = "root";
$pass = "";
$database = "catering";
$db = mysqli_connect("$host","$user","$pass","$database");
if(mysqli_connect_error()){
    echo 'gagal melakukan koneksi ke database: '.mysqli_connect_error();
}
?>



<?php
//function register untuk user
function register($data){
    global $db;
    $username = strtolower(stripslashes(($data["username"])));
    $nama = strtolower($data["nama_lengkap"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_hp = htmlspecialchars($data["no_hp"]);
    $password = mysqli_real_escape_string($db,$data["password"]);
    $password = password_hash($password,PASSWORD_DEFAULT);
    $query= "INSERT INTO pengguna VALUES ('','$username','$nama','$email','$alamat',$no_hp,'$password')";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);

    
}
?>



<?php
//function tambah data produk
function tambah($data){
    global $db;
    $nama = htmlspecialchars($data['nproduk']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $harga = htmlspecialchars($data['harga']);
    var_dump($data);

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO produk VALUES ('','$nama','$deskripsi','$gambar','$harga')";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}
?>

<?php
//function upload+validasi
function upload(){
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];

//cek apakah yang diupload gambar
$ekstensigambarvalid = ['jpg','jpeg','png'];
$ekstensigambar = explode('.', $namafile);
$ekstensigambar = strtolower(end($ekstensigambar));
if(!in_array($ekstensigambar, $ekstensigambarvalid)){
	echo "<script>alert('yang anda upload bukan gambar');</script>";
	return false;
}

//cek ukuran gambar
if($ukuranfile>2000000){
	echo "<script>alert('file yang anda upload terlalu besar');</script>";
	return false;
}

//generate nama file baru
$namafilebaru = uniqid();
$namafilebaru .= '.';
$namafilebaru .= $ekstensigambar;

//file siap diuplad
move_uploaded_file($tmpname, '../bootstrap/images/'.$namafilebaru);
return $namafilebaru;

}
?>

<?php
function hapusprod($data){
    global $db;
    mysqli_query($db,"DELETE FROM PRODUK WHERE id_produk = '$data'");
    return mysqli_affected_rows($db);
}




?>


<?php
//function ubah data produk
function ubah($data){
global $db;
var_dump($data);
$id =$data["id"];
$nama = htmlspecialchars($data['nama']);
$deskripsi = htmlspecialchars($data['deskripsi']);
$harga = htmlspecialchars($data['harga']);

$gambar = upload();
if(!$gambar){
    return false;
}

$query = "UPDATE produk SET id = '$id',
                            nproduk ='$nama',
                            deskripsi ='$deskripsi',
                            gambar ='$gambar',
                            harga ='$harga',
                            WHERE id =$id
                            
                            
                            ";
mysqli_query($db,$query);
return mysqli_affected_rows($db);
}

?>

<?php 
//function untuk menampilkan rupiah
 
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka);
	return $hasil_rupiah;
 
}
?>