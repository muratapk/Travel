<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="otell";
$gelen="OtelId='$oku'";
$datam->Silme($tablo,$gelen);
?>