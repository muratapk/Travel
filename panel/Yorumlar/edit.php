<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from yorumlar where YorumId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['YorumId'];?>" name="YorumId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Yorum Girin</label> 
      <div class="col-8">
        <input id="kul" name="YorumAd" value="<?php echo $row['YorumAd'];?>" placeholder="Yorum Adını Girin" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Şifrenizi Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['OtelId'];?>" name="OtelId" placeholder="OtelId Girin" type="text" class="form-control">
      </div>

       <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Yorum Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Yorum'];?>" name="Yorum" placeholder="Yorum Girin" type="text" class="form-control">
      </div>

       <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Şifrenizi Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Gizle'];?>" name="Gizle" placeholder="Gizle" type="text" class="form-control">
      </div>
      
    
    


    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>