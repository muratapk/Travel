<?php
 require_once("../../config/baglan.php");
 ?>
 <form method="post" action="save.php">
  <div class="form-group row">
    <label for="Kul" class="col-4 col-form-label">Kullanıcı Adını Girin</label> 
    <div class="col-8">
      <input id="Kul" name="Kul" placeholder="Kullanıcı Adını Girin" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="YETKİ" class="col-4 col-form-label">Yeki Girin</label> 
    <div class="col-8">
      <select id="YETKİ" name="Yetki" class="custom-select">
        <option value="Admin">Admin</option>
        <option value="Editör">Editör</option>
        <option value="Üye">Üye</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="Sifre" class="col-4 col-form-label">Şifre Girin</label> 
    <div class="col-8">
      <input id="Sifre" name="Sifre" placeholder="Şifre" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>