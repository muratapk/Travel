<?php
 require_once("../../config/baglan.php");
 ?>
 <form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label">Özellik Girin</label> 
    <div class="col-8">
      <input id="Kul" name="OzelAd" placeholder="Özellik Girin" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Şifre Girin</label> 
    <div class="col-8">
      <input id="Sifre" name="OzelSimge" placeholder="Simge Girin" type="text" class="form-control">
    </div>
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>