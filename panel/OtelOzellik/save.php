<?php 
require_once("../../config/database.php");
$OzelAd=$_POST['OzelAd'];
$OzelSimge=$_POST['OzelSimge'];
$tablo="otelozellik";
$kolon='OzelAd, OzelSimge';
$deger="'$OzelAd','$OzelSimge'";
$datam->Ekle($kolon, $deger, $tablo);

?>