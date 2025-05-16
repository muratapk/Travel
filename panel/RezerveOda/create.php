<?php 
require_once("../../config/baglan.php");

?>

<form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label">Rezerve Oda Girin</label> 
    <div class="col-8">
      <input id="Kul" name="RezerveOdaId" placeholder="RezerveOdaId Girin:" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OtelId</label> 
    <div class="col-8">
      <input id="Sifre" name="OtelId" placeholder="OtelId" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OdaId Adı</label> 
    <div class="col-8">
      <input id="Sifre" name="OdaId" placeholder="OdaId Adı" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">GirisTarihi</label> 
    <div class="col-8">
      <input id="Sifre" name="GirisTarihi" placeholder="GirisTarihi" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OdaDurumu</label> 
    <div class="col-8">
      <input id="Sifre" name="OdaDurumu" placeholder="OdaDurumu" type="text" class="form-control">
    </div>
    


  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>