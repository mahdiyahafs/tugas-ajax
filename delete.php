<?php 
require 'koneksi.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }

$id = $_GET["id"];

if (hapus($id)>0) {
			
			echo "<div align='center'>Data berhasil dihapus<a href='home2.php'>Klik disini</a>";
		}
	else
	{
			echo "data gagal dihapus";
			echo "<br>";
			echo "klik ";
			echo "<a href='home2.php'>disini</a>";
			echo " untuk melihat hasil";
		}
	


 ?>