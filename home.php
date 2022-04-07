<?php
session_start();

if(empty( $_SESSION['oturum']))
  header('Location:login.php');

echo 'Hoşgeldiniz'.$_SESSION['oturum'];
?>

<br>
<a href="kontrol.php?cikis">Çıkış</a>


