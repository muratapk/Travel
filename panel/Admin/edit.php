<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="select * from admin where AdminId='$oku'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
    <input type="hidden" value="<?php echo $row['AdminId'];?>" name="AdminId"/>
    <div class="form-group row">
      <label for="kul" class="col-4 col-form-label">Kullanıcı Adı Girin</label> 
      <div class="col-8">
        <input id="kul" name="kul" value="<?php echo $row['Kul'];?>" placeholder="Kullanıcı Adı Girin" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="sifre" class="col-4 col-form-label">Şifrenizi Girin</label> 
      <div class="col-8">
        <input id="sifre" value="<?php echo $row['Sifre'];?>" name="sifre" placeholder="Şifrenizi Girin" type="text" class="form-control">
      </div>
    </div>
    
    <div class="form-group row">
      <label for="select" class="col-4 col-form-label">Select</label> 
      <div class="col-8">
        <select id="select" name="yetki" class="custom-select">
          <option value="<?php echo $row['Yetki'];?>"><?php echo $row['Yetki'];?></option>   
          <option value="Admin">Admin</option>
          <option value="Editör">Editör</option>
          <option value="Üye">Üye</option>
        </select>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>