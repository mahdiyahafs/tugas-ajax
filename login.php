<?php 
require 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css" />
	<title>	Daftar Ulang</title>
</head>

<body>
<!--Element-elemen tag <body> tulis disini-->
<header> <!--Section HEADER-->
<div class="logo">DAFTAR ULANG PPDB</div>
  <div class="konten">
  <h1 class="page-header">Silahkan Login</h1>
        
  <form action="actionlogin.php" method="post">
  <div class="box">
    <h2></h2>
  <form>
    <div class="inputBox">
    <input type="text" name="username" required=""> 
    <label> username</label>
    </div>
    <div class="inputBox">
    <input type="password" name="password" required=""> 
    <label>password</label>
    </div>
    <br>
    <input type="submit" name="submit" value="submit">
    <button> <a href="formregistrasi.php">register</a></button>
  
  </form>
  </div>

<footer> <!--Section FOOTER-->
	<div class="footer"> <p>Cover template for <a href="https://google.com/">Google</a>, by <a href="https://instagram.com/mahdiyahafifah">@mahdiyahafifah</a>.</p></div>
</footer>
</body>
</html>
