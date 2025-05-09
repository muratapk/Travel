<?php 
require_once("../../config/database.php");
$OzelAd=$_POST['OzelAd'];
$OzelSimge=$_POST['OzelSimge'];
$tablo="otelozellik";
$deger="'$OzelAd','$OzelSimge'";
$datam->Ekle($deger,$tablo);

?>