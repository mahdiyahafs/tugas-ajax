<?php 
require 'koneksi.php';
session_start();


$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];

$result = mysqli_query($conn,"INSERT INTO user2 VALUES (null,'$username','$password','$email')");


if ($result) {
	echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
}
	else {
		echo "Pendaftaran Gagal!";
       echo "<a href='formregistrasi.php'></a>";
	}
?>
