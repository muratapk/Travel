<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="uyelik";
$gelen="UyeId='$oku'";
$datam->Silme($tablo,$gelen);
?>