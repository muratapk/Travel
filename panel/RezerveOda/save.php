<?php 
require_once("../../config/database.php");
$RezerveOdaId=$_POST['RezerveOdaId'];
$OtelId=$_POST['OtelId'];
$OdaId=$_POST['OdaId'];
$GirisTarihi=$_POST['GirisTarihi'];
$CikisTarihi=$_POST['CikisTarihi'];
$OdaDurumu=$_POST['OdaDurumu'];
$tablo="rezerveoda";

$kolon='RezerveOdaId, OtelId, GirisTarih, CikisTarihi, OdaDurumu';
$deger="'$RezerveOdaId', '$OtelId', '$GirisTarihi','$CikisTarihi', '$OdaDurumu'";
$datam->Ekle($kolon, $deger, $tablo);

?>