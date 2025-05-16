<?php 
require_once("../../config/baglan.php");

?>

<form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label">Otel Girin</label> 
    <div class="col-8">
      <input id="Kul" name="OtelId" placeholder="OtelId Girin:" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OtelAd Girin</label> 
    <div class="col-8">
      <input id="Sifre" name="OtelAd" placeholder="OtelAd" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OtelAciklama</label> 
    <div class="col-8">
      <input id="Sifre" name="OtelAciklama" placeholder="OtelAciklama" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OzelOzellik</label> 
    <div class="col-8">
      <input id="Sifre" name="OzelOzellik" placeholder="OzelOzellik" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Şifre</label> 
    <div class="col-8">
      <input id="Sifre" name="Sifre" placeholder="Şifrenizi Girin" type="text" class="form-control">
    </div>
    


  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>