<?php 
require_once("../../config/baglan.php");

?>

<form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label">RezervasyonId Girin</label> 
    <div class="col-8">
      <input id="Kul" name="RezervasyonId" placeholder="RezervasyonId Girin:" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">GirisTarih</label> 
    <div class="col-8">
      <input id="Sifre" name="GirisTarih" placeholder="GirisTarih" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">CikisTarih</label> 
    <div class="col-8">
      <input id="Sifre" name="CikisTarih" placeholder="CikisTarih" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Yetiskin</label> 
    <div class="col-8">
      <input id="Sifre" name="Yetiskin" placeholder="Yetiskin" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Cocuk</label> 
    <div class="col-8">
      <input id="Sifre" name="Cocuk" placeholder="Cocuk" type="text" class="form-control">
    </div>

    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">UyeId</label> 
    <div class="col-8">
      <input id="Sifre" name="UyeId" placeholder="UyeId" type="text" class="form-control">
    </div>
    


  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>