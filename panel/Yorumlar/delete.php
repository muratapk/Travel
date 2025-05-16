<?php 
require_once("../../config/database.php");
$oku=$_REQUEST['oku'];
$tablo="yorumlar";
$gelen="YorumId='$oku'";
$datam->Silme($tablo,$gelen);
?>