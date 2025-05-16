<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from rezerveoda where RezerveOdaId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['RezerveOdaId'];?>" name="RezerveOdaId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">OtelId Girin</label> 
      <div class="col-8">
        <input id="kul" name="OtelId" value="<?php echo $row['OtelId'];?>" placeholder="OtelId" type="text" class="form-control">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">GirisTarihi Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['GirisTarihi'];?>" name="GirisTarihi" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">CikisTarihi Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['CikisTarihi'];?>" name="CikisTarihi" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">OdaDurumu Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['OdaDurumu'];?>" name="OdaDurumu" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>

    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>