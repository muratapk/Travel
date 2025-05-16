<?php
 require_once("../../config/baglan.php");
 ?>
 <form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label"> Yorum Girin</label> 
    <div class="col-8">
      <input id="Kul" name="YorumAd" placeholder="Yorum Adını Girin" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">OtelId </label> 
    <div class="col-8">
      <input id="Sifre" name="OtelId" placeholder="OtelId" type="text" class="form-control">
    </div>
      <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Yorum</label> 
    <div class="col-8">
      <input id="Sifre" name="Yorum" placeholder="Yorum" type="text" class="form-control">
    </div>
      <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Gizle</label> 
    <div class="col-8">
      <input id="Sifre" name="Gizle" placeholder="Gizle" type="text" class="form-control">
    </div>
     
    
  
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>