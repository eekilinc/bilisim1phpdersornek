<?php
session_start();

$user="ekrem";
$password="12345";

if(isset($_POST['user'])&& isset($_POST['password']))
{
$gelenuser=$_POST['user'];
$gelenpassword=$_POST['password'];

 if ($gelenuser==$user && $gelenpassword==$password)
 {
    $_SESSION['oturum']=$user;
    header("Location:home.php");
 }
 else
 {

    // GET İLE HATA GÖNDEREBİLİRİZ
    // SESSİON İLE HATA GÖNDEREBİLİRİZ
    $_SESSION['hata']="Kullanıcı adı yada parola hatalı";
    header("Location:login.php");

 }

}

if(isset($_GET['cikis']))
{
    unset($_SESSION['oturum']);
    $_SESSION['cikis']="Tebriker çıkış yaptınız tekrar bekleriz";
  
    header('Location:login.php');
}








