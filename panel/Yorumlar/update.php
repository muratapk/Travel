<?php
require_once("../../config/database.php");
$YorumId = $_POST['YorumId'];
$YorumAd = $_POST['YorumAd'];
$OtelId= $_POST['OtelId'];
$Yorum= $_POST['Yorum'];
$Gizle= $_POST['Gizle'];
$tablo="yorumlar";
$veriler="YorumAd='$YorumAd', OtelId='$OtelId', Yorum='$Yorum', Gizle='$Gizle'";
$gelen="YorumId='$YorumId'";
$datam->Duzelt($tablo,$veriler,$gelen);

?>