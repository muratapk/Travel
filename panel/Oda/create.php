<?php
 require_once("../../config/baglan.php");
?>
<form method="post" action="save.php">

  <div class="form-group row">
    <label for="OdaNo" class="col-4 col-form-label">Oda Numarası Girin</label> 
    <div class="col-8">
      <input id="OdaNo" name="OdaNo" placeholder="Oda Numarası Girin" type="number" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="OdaAdi" class="col-4 col-form-label">Oda Adı Girin</label> 
    <div class="col-8">
      <input id="OdaAdi" name="OdaAdi" placeholder="Oda Adı Girin" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="OdaFiyat" class="col-4 col-form-label">Oda Fiyatı Girin</label> 
    <div class="col-8">
      <input id="OdaFiyat" name="OdaFiyat" placeholder="Oda Fiyatı Girin" type="number" step="0.01" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="Durum" class="col-4 col-form-label">Oda Durumu Seçin</label> 
    <div class="col-8">
      <select id="Durum" name="OdaDurum" class="custom-select">
        <option value="Boş">Boş</option>
        <option value="Dolu">Dolu</option>
        <option value="Rezerve">Rezerve</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>
