<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
 ?>
 <!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css" />
	<title>DAFTAR ULANG	</title>
</head>
<body>
	<header> <!--Section HEADER-->
<div class="logo">TAMBAH DATA PESERTA</div>


	 <div class="menu">
	<br><br>
 	<form method="POST" action="actionadd.php">
 		<input type="hidden" name="waktu">
 		Nama 	: 
		<input type="text" name="nama" placeholder="Nama">
		<br>
		<br>
		No Peserta :
		<input type="text" name="nopeserta" placeholder="No.Peserta"> </input>
		<br><br>
		Asal Sekolah       :
		<input type="text" name="asalsekolah" placeholder="Asal Sekolah"> </input>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
<footer> <!--Section FOOTER-->
	<div class="footer"> <p>Cover template for <a href="https://google.com/">Google</a>, by <a href="https://instagram.com/mahdiyahafifah">@mahdiyahafifah</a>.</p></div>
</footer>
</body>
</html>
</html>