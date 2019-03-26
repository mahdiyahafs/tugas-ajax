<?php 
require 'koneksi.php';
 session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css" />
	<title>DAFTAR ULANG</title>
</head>
<body>
<!--Element-elemen tag <body> tulis disini-->
<header> <!--Section HEADER-->
<div class="logo">UNIVERSITAS SEOUL</div>
<center>
       <div class="menu">
     
			<ul>
              <li><a href="add.php">Add New Data</a></button>
							<li><a href="logout.php">Log Out</a></li>
					
			</ul>
			
		</div>
		</center>
  </header>

</header>
<main> <!--Section MAIN BODY-->
	<div class="konten">
<center>
  <br>
    <h2>DAFTAR PESERTA</h2>
  <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>No.Peserta</th>
    <th>Asal Sekolah</th>
    <th>terakhir di update</th>
    <th>Option</th>
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
    <td><?= $i; ?></td>
    <td><?= $x["nama"];  ?></td>
    <td><?= $x["nopeserta"];  ?></td>
    <td><?= $x["asalsekolah"];  ?></td>
    <td><?= $x["waktu"];  ?></td>
    <td>
      <center>
        <button><a href="update.php?id=<?= $x["id"]?>">Update</a></button><br><br>
        <button><a href="delete.php?id=<?= $x["id"]?>" onclick =" return confirm ('Are you sure?');">Delete</a></button></center>
    </td>
  
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</center>
</div>
</main>
<footer> <!--Section FOOTER-->
	<div class="footer"> <p>Cover template for <a href="https://google.com/">Google</a>, by <a href="https://instagram.com/mahdiyahafifah">@mahdiyahafifah</a>.</p></div>
</footer>
</body>
</html>
