<?php 
require_once("../../config/database.php");
$ResimAdi=$_POST['ResimAdi'];
$ResimId=$_POST['ResimId'];
$OtelId=$_POST['OtelId'];
$ResimYolu=$_POST['ResimYolu'];

$tablo="otelresimler";
$kolon='ResimAdi, ResimId, OtelId, ResimYolu';
$deger="'$ResimAdi','$ResimId','$OtelId','$ResimYolu'";
$datam->Ekle($kolon, $deger, $tablo);

?>