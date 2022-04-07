<?php
$kad="ekrem";
$parola="123";

if(isset($_POST['kad'])&&isset($_POST['parola']))
{
  if($kad==$_POST['kad']&&$parola==$_POST['parola'])
    echo "Tebrikler giriş yaptınız";
  else
   // header
   header("Location:degiskenler.php?hata");
}
else
header("Location:degiskenler.php");

/*
if(isset($_REQUEST['satir']) && isset($_REQUEST['sutun']) )
{
$satir=$_REQUEST['satir'];
$sutun=$_REQUEST['sutun'];

echo '<table border="1">';
  for ($i=0; $i <$satir ; $i++)
  { 
    echo '<tr>';
    for ($j=0; $j <$sutun ; $j++) { 
       echo "<td>$i - $j</td>";
    }
    echo '</tr>';
  }




}*/



