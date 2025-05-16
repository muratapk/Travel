<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="rezervasyon";
$gelen="RezervasyonId='$oku'";
$datam->Silme($tablo,$gelen);
?>