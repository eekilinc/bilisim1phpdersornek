<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="goster.php" method="post" >
  <select name="secenekler" id="">
      <option value="iller">İller</option>
      <option value="ilceler">İlçeler</option>
      <option value="koyler">Köyler</option>     
  </select>
   <button>Listele</button>
  </form>  
  <br>

  <?php 
  $secenekler=array("iller"=>array("ankara","ısparta", "burdur"),"ilceler"=>array("aglasun", "yalvaç","serik"),"koyler"=>array(" yaka ","yeşilbaşköy","yazır"));

  if(isset($_POST['secenekler']))
  {
      echo '<select>';
     foreach( $secenekler[$_POST['secenekler']] as $item )
     {
      ?>   
      <option><?php echo $item; ?></option>
     <?php
     }  
  echo '</select>';
  }
  ?>
</body>
</html>