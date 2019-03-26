<?php 
	require 'koneksi.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }

	$id = $_GET["id"];

	$update = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (update ($_POST) > 0){  
			echo "data berhasil diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='home2.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else{
			echo "data gagal diubah";
			echo "<br>";
			echo "klik ";
			echo "<a href='home2.php'>disini</a>";
			
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css" />
	<title>Edit Data</title>
</head>
<body>
	<header> <!--Section HEADER-->
<div class="logo">UNIVERSITAS SEOUL </div>


	 <div class="menu">
	<br><br>

 		
<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $update["id"]?>">
 		<input type="hidden" name="waktu">
 		 		<br>
		Nama	:
		<input name="nama"  value="<?= $update["nama"]?>">
		<br><br>
		No.Peserta	:
		<input name="nopeserta"  value="<?= $update["nopeserta"]?>">
		<br><br>
		Asal Sekolah	:
		<input name="asalsekolah"  value="<?= $update["asalsekolah"]?>">
		<br><br>
		<input type="submit" name="submit"">
 	</form>
