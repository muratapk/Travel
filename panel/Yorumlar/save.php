<?php 
require_once("../../config/database.php");
$YorumAd=$_POST['YorumAd'];
$OtelId=$_POST['OtelId'];
$Yorum=$_POST['Yorum'];
$Gizle=$_POST['Gizle'];


$tablo="yorumlar";
$kolon='YorumAd, OtelId, Yorum, Gizle';
$deger="'$YorumAd','$OtelId', '$Yorum', '$Gizle'"; 
$datam->Ekle($kolon, $deger, $tablo);

?>