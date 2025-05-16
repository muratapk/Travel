<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from uyelik where UyelId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['UyeId'];?>" name="UyeId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Uyelik Girin</label> 
      <div class="col-8">
        <input id="kul" name="UyeAd" value="<?php echo $row['UyeAd'];?>" placeholder="Uye Adı" type="text" class="form-control">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Cep  Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Cep'];?>" name="Cep" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Mail Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Mail'];?>" name="Mail" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Kulllanıcı Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Kul'];?>" name="Kul" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Sifre Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Sifre'];?>" name="Sifre" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>
    
    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>