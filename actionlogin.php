<?php 
  require 'koneksi.php';
  session_start();
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $result = mysqli_query($conn,"SELECT * FROM user2 where username='$username' and password ='$password'");

  $data = mysqli_fetch_assoc($result);

  if (mysqli_num_rows($result)>0){
    //login
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $data['id'];
    header("location:home2.php");
  }
  
  else {
    echo "Anda belum terdaftar!!!";
    echo "<br>";
    echo "<a href='formregistrasi.php'>registrasi<a>";
  }

?>