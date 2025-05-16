<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="otelresimler";
$gelen="ResimId='$oku'";
$datam->Silme($tablo,$gelen);
?>