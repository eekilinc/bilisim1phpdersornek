<?php 
session_start();
if(isset( $_SESSION['oturum']))
header('Location:home.php');
// home.php sayfasına girmek istersek
// oturum kontrolü yapacak
// kullanıcı ad ve parola doğru olarak girilmiş olması lazım

// login.php kullanıcı adı ve parola girilecek
// kontrol.php ye gidecek
// kullanıcı adı ve parola doğru ise home. php ye gidecek
// doğru değilse login.php ye gidecek 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Sayfası</title>
</head>
<body>

<div style="color:white;margin:20px auto;border:1px solid gray;width:20%;background-color:red; ">
  <form action="kontrol.php" method="post">
  <div style="margin:20px;">
  <span>Kullanıcı Adı </span> 
  <input style="width:150px;height:30px;" type="text" name="user">
  </div>
  <div style="margin:20px;">
  <span style="margin-right:46px;">Parola </span> 
  <input style="width:150px;height:30px;" type="password" name="password">
</div>
 <div style="padding:20px;">  
     <button style="margin:0 auto; width:100%">Giriş</button>
  </div>
  <div style="color:white;margin:20px;border:1px solid white;" >
   <?php
    if(isset($_SESSION['hata']))
    {
        echo $_SESSION['hata'];
        unset($_SESSION['hata']);
    }

      if(isset($_SESSION['cikis']))
    {
        echo $_SESSION['cikis'];
        unset($_SESSION['cikis']);
    }

   ?>

  </div>
  </form>

</div>


</body>

</html>

