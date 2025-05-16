<?php
require_once("../../config/database.php");
$RezervasyonId = $_POST['RezervasyonId'];
$GirisTarih=$_POST['GirisTarih'];
$CikisTarih=$_POST['CıkısTarih'];
$Yetiskin=$_POST['Yetiskin'];
$Cocuk=$_POST['Cocuk'];
$UyeId=$_POST['UyeId'];
$tablo="rezervasyon";

$veriler=" RezervasyonId='$RezervasyonId', GirisTarih='$GirisTarih', CikisTarih='$CikisTarih', Yetiskin='$Yetiskin', Cocuk='$Cocuk' ";
$gelen="RezervasyonIdId='$RezervasyonId';
$datam->Duzelt($tablo,$veriler,$gelen);

?>