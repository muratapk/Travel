<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from ozellikler where OzelId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['OzelId'];?>" name="OzelId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Ozellik Girin</label> 
      <div class="col-8">
        <input id="kul" name="OzelAd" value="<?php echo $row['OzelAd'];?>" placeholder="Ozellik Adı" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Şifrenizi Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['OzelSimge'];?>" name="OzelSimge" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>