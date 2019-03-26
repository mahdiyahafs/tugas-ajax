<?php 
	require 'koneksi.php';


	session_start();
	
	$nama = $_POST['nama'];
	$nopeserta = $_POST['nopeserta'];
	$asalsekolah = $_POST['asalsekolah'];
	//$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama','$nopeserta','$asalsekolah',null)");

		if ($tambah!=0) {
			echo "data berhasil ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='home2.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='add.php'>disini</a>";
		

		}
	

 ?>