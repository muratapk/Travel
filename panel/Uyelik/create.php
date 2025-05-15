<?php 
require_once("../../config/baglan.php");

?>

<form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label">Üye Adınız Girin</label> 
    <div class="col-8">
      <input id="Kul" name="UyeAd" placeholder="Üye Adını Girin:" type="text" class="form-control">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Cep Telefonu</label> 
    <div class="col-8">
      <input id="Sifre" name="Cep" placeholder="Cep Telefonu" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Mail</label> 
    <div class="col-8">
      <input id="Sifre" name="Mail" placeholder="Mail" type="text" class="form-control">
    </div>
    
    <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Kullanıcı Adı</label> 
    <div class="col-8">
      <input id="Sifre" name="Kul" placeholder="Kullanıcı Adı" type="text" class="form-control">
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