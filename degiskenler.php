<form action="cevap.php" method="post" >
  <?php 
    if(isset($_GET['hata']))
      echo "kullanıcı adı yada parola hatalı";

  ?>

 <input required type="text" name="kad" id=""placeholder="Kullanıcı Adı" >
 <input required type="password" name="parola" id=""placeholder="Parola" >
 <button >Giriş</button> 
 
</form>
