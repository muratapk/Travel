<?php 
require_once("../../config/database.php");
$OtelId=$_POST['OtelId'];
$OtelAd=$_POST['OtelAd'];
$OtelAciklama=$_POST['OtelAciklama'];
$OzelOzellik=$_POST['OzelOzellik'];

$tablo="otell";
$kolon='OtelId, OtelAd, OtelAciklama, OzelOzellik';
$deger="'$OtelId','$OtelAd','$OtelAciklama','$OzelOzellik'";
$datam->Ekle($kolon, $deger, $tablo);

?>