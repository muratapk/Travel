<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="rezerveoda";
$gelen="RezerveOdaId='$oku'";
$datam->Silme($tablo,$gelen);
?>