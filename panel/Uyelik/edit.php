<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from Uyelik where UyeId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['UyeId'];?>" name="UyeId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Uye Adını Girin</label> 
      <div class="col-8">
        <input id="kul" name="UyeAd" value="<?php echo $row['UyeAd'];?>" placeholder="Özellik Adı" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Cep Telefonu</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Cep'];?>" name="Cep" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>
       

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Mail</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Mail'];?>" name="Mail" placeholder="Mail Girin" type="text" class="form-control">
      </div>

      <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Kullanıcı Adı</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Kul'];?>" name="Kul" placeholder="Kullanıcı Girin" type="text" class="form-control">
      </div>

      <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Şifre</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Sifre'];?>" name="Sifre" placeholder="Şifre Girin" type="text" class="form-control">
      </div>
    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>