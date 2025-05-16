<?php 
require_once("../../config/database.php");
$OtelOdaId=$_POST['OtelOdaId'];
$OtelId=$_POST['OtelId'];
$OdaId=$_POST['OdaId'];

$tablo="oteloda";
$kolon='OtelOdaId, OtelId, OdaId';
$deger="'$OtelOdaId','$OtelId','$OdaId'";
$datam->Ekle($kolon, $deger, $tablo);

?>