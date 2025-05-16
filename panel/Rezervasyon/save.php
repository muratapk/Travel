<?php 
require_once("../../config/database.php");
$RezervasyonId=$_POST['RezervasyonId'];
$GirisTarih=$_POST['GirisTarih'];
$CikisTarih=$_POST['CikisTarih'];
$Yetiskin=$_POST['Yetiskin'];
$UyeId=$_POST['UyeId'];
$tablo="rezervasyon";
$kolon="'RezervasyonId, GirisTarih, CikisTarih, Yetiskin, UyeId'";
$deger="'$RezervasyonId','$GirisTarih','$CıkısTarih','$Yetiskin','$UyeId'";
$datam->Ekle($kolon, $deger, $tablo);

?>