<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from otelresimler where ResimId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['ResimId'];?>" name="ResimId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">ResimAdi Girin</label> 
      <div class="col-8">
        <input id="kul" name="ResimAdi" value="<?php echo $row['ResimAdi'];?>" placeholder="ResimAdi" type="text" class="form-control">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">OtelId Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['OtelId'];?>" name="OtelId" placeholder="OtelId Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">ResimYolu Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['ResimYolu'];?>" name="ResimYolu" placeholder="ResimYolu Girin" type="text" class="form-control">
      </div>
    </div>


    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>