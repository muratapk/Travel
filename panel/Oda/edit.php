<?php 
require_once("../../config/baglan.php");
$oku = $_REQUEST['oku'];
$sql = "SELECT * FROM oda WHERE OdaId='$oku'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<form method="post" action="update.php">
  <input type="hidden" value="<?php echo $row['OdaId']; ?>" name="OdaId"/>

  <div class="form-group row">
    <label for="OdaNo" class="col-4 col-form-label">Oda Numarası Girin</label> 
    <div class="col-8">
      <input id="OdaNo" name="OdaNo" value="<?php echo $row['OdaNo']; ?>" placeholder="Oda Numarası Girin" type="number" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="OdaAdi" class="col-4 col-form-label">Oda Adı Girin</label> 
    <div class="col-8">
      <input id="OdaAdi" name="OdaAdi" value="<?php echo $row['OdaAdi']; ?>" placeholder="Oda Adı Girin" type="text" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="OdaFiyat" class="col-4 col-form-label">Oda Fiyatı Girin</label> 
    <div class="col-8">
      <input id="OdaFiyat" name="OdaFiyat" value="<?php echo $row['OdaFiyat']; ?>" placeholder="Oda Fiyatı Girin" type="number" step="0.01" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="OdaDurum" class="col-4 col-form-label">Oda Durumu Seçin</label> 
    <div class="col-8">
      <select id="OdaDurum" name="OdaDurum" class="custom-select">
        <option value="Boş" <?php if($row['OdaDurum'] == "Boş") echo "selected"; ?>>Boş</option>
        <option value="Dolu" <?php if($row['OdaDurum'] == "Dolu") echo "selected"; ?>>Dolu</option>
        <option value="Rezerve" <?php if($row['OdaDurum'] == "Rezerve") echo "selected"; ?>>Rezerve</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Güncelle</button>
    </div>
  </div>
</form>
