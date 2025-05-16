<?php
require_once("../../config/database.php");
$RezerveOdaId=$_POST['RezerveOdaId'];
$OtelId=$_POST['OtelId'];
$OdaId=$_POST['OdaId'];
$GirisTarihi=$_POST['GirisTarihi'];
$CikisTarihi=$_POST['CikisTarihi'];
$OdaDurumu=$_POST['OdaDurumu'];
$tablo="rezerveoda";

$veriler="RezerveOdaId='$RezerveOdaId', OtelId='$OtelId', GirisTarih='$GirisTarihi', CikisTarihi='$CikisTarihi, OdaDurumu='$OdaDurumu';
$gelen="RezerveOdaId='$RezerveOdaId';
$datam->Duzelt($tablo,$veriler,$gelen);

?>