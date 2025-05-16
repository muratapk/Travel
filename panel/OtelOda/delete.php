<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="oteloda";
$gelen="OtelOdaId='$oku'";
$datam->Silme($tablo,$gelen);
?>