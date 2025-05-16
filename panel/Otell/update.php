<?php
require_once("../../config/database.php");
$OtelId=$_POST['OtelId'];
$OtelAd=$_POST['OtelAd'];
$OtelAciklama=$_POST['OtelAciklama'];
$OzelOzellik=$_POST['OzelOzellik'];

$tablo="otell";

$veriler="OtelId='$OtelId', OtelAd='$OtelAd', OtelAciklama='$OtelAciklama', OzelOzellik='$OzelOzellik'";
$gelen="OtelId='$OtelId'";
$datam->Duzelt($tablo,$veriler,$gelen);

?>