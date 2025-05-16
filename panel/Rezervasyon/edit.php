<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from rezervasyon where RezervasyonlId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['RezervayonId'];?>" name="RezervasyonId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Rezervasyon Girin</label> 
      <div class="col-8">
        <input id="kul" name="GirisTarih" value="<?php echo $row['GirisTarih'];?>" placeholder="GirisTarih" type="text" class="form-control">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">CıkısTarih  Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['CikisTarih'];?>" name="CikisTarih" placeholder="CikisTarih Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Yetiskin Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Yetiskin'];?>" name="Yetiskin" placeholder="Yetiskin Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Cocuk Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Cocuk'];?>" name="Cocuk" placeholder="Cocuk Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">UyeId Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['UyeId'];?>" name="UyeId" placeholder="UyeId Girin" type="text" class="form-control">
      </div>
    </div>
    
    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>