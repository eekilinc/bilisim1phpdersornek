<?php
/*$kullanici=array(array("hasan","can","bay") ,array("mustafa","kaya","bay"),array("ceren","kara","bayan"),array("ayşe","hilal","bayan"),array("halit","aslan","bay"),array("kumru","yücel","bayan"));
$n=0;
?>

<table border="1" style="border:1px solid gray">
    <th>No</th>
    <th>Ad</th>
    <th>Soyad</th>
    <th>Cinsiyet</th>
    <?php
    foreach($kullanici as $satir)
     {
         ?>
         <tr>
         <td><?php echo ++$n; ?></td>
         <?php
          foreach($satir as $sutun)
           {
            ?>               
              <td><?php echo $sutun; ?></td>
          
            <?php
           }
         ?>
         </tr>
         <?php
     }
    ?>
</table>*/




$secenekler=array("iller"=>array("ankara","ısparta", "burdur"),"ilceler"=>array("aglasun", "yalvaç","serik"),"koyler"=>array(" yaka ","yeşilbaşköy","yazır"));

if(isset($_POST['secenekler']))
{
   foreach( $secenekler[$_POST['secenekler']] as $item )
   {
    echo $item.'<br>';
   }  

}








