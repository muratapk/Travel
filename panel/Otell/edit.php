<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from otell where OtelId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['OtelId'];?>" name="OtelId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Otel Girin</label> 
      <div class="col-8">
        <input id="kul" name="OtelAd" value="<?php echo $row['OtelAd'];?>" placeholder="Otel Adı" type="text" class="form-control">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">OtelAciklama</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['OtelAciklama'];?>" name="OtelAciklama" placeholder="OtelAciklama Girin" type="text" class="form-control">
      </div>
    </div>

    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">OzelOzellik Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['OzelOzellik'];?>" name="OzelOzellik" placeholder="OtelOzellik Girin" type="text" class="form-control">
      </div>
    </div>

    
    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>