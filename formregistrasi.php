
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css" />
  <title> Daftar Peserta</title>
</head> 

<body>
<!--Element-elemen tag <body> tulis disini-->
<header> <!--Section HEADER-->
<div class="logo">Daftar Ulang</div>
  <div class="konten">
 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Silahkan Registrasi</h1></div></div></header>
        
  <form method="POST" action="actionregister.php">

  <div class="box">
    <h2>Form Register</h2>
  
  <form>
    <label> Username</label>
    <div class="inputBox">
    <input type="username" name="username" placeholder="Username" required>
    
    </div>
    <br>
    <label>Password</label>
    <div class="inputBox">
    <input type="password" name="password" placeholder="password" required>
   
    </div>
    <br>
    <label>email</label>
    <div class="inputBox">
    <input type="email" name="email" placeholder="email" required>
   
    </div>
    <br>
    <input type="submit" name="submit" value="submit">
  </form>
  </div>
<footer> <!--Section FOOTER-->
  <div class="footer"> <p>Cover template for <a href="https://google.com/">Google</a>, by <a href="https://instagram.com/mahdiyahafifah">@mahdiyahafifah</a>.</p></div>
</footer>
</body> 
</html>