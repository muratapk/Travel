<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from kategori where KategoriId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['KategoriId'];?>" name="KategoriId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Kategori Girin</label> 
      <div class="col-8">
        <input id="kul" name="KategoriAdi" value="<?php echo $row['KategoriId'];?>" placeholder="Kategori Adı Girin" type="text" class="form-control">
      </div>
    </div>
    
    
    
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>