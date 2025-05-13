<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="otelozellik";
$gelen="OzelId='$oku'";
$datam->Silme($tablo,$gelen);
?>