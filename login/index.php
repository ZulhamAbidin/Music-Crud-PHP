<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>LOGIN</title>
</head>
<body>


  <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo "Login gagal! username dan password salah!";
    }else if($_GET['pesan'] == "logout"){
      echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
      echo "Anda harus login untuk mengakses halaman admin";
    }
  }
  ?>

  <br>
  <div class="container mt-3 col-lg-4 col-10 p-4">
    <div class="login text-center mt-4 pb-4"><h2>LOGIN ADMIN</h2></div>
    <form method="post" action="cek_login.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="username" class="form-control" name="username" placeholder="Username tim1">
        <small id="emailHelp" class="form-text text-muted">Kami selalu menjaga keamanan data anda.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password tetapsatu">
      </div>
      <button type="submit"  class="btn-block btn btn-primary">Login</button>
      <a href="../index.php" class="btn btn-info btn-block">Kembali</a>
    </form>
  </div>

  <div class="footer fixed-bottom">
   <p>Created By Team 1 Using the bootstrap framework</p>
 </div>


 <div class="container">
   
 </div>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>