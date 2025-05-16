<?php 
require_once("../../config/baglan.php");

?>

<form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label"> Resim Adi Girin</label> 
    <div class="col-8">
      <input id="Kul" name="ResimAdi" placeholder="ResimAdi Girin:" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">ResimId</label> 
    <div class="col-8">
      <input id="Sifre" name="ResimId" placeholder="ResimId" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OtelId</label> 
    <div class="col-8">
      <input id="Sifre" name="OtelId" placeholder="OttelId" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">ResimYolu</label> 
    <div class="col-8">
      <input id="Sifre" name="ResimYolu" placeholder="ResimYolu" type="text" class="form-control">
    </div>
    
    


  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>