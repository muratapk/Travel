<?php
require_once("../../config/database.php");
$ResimAdi = $_POST['ResimAdi'];
$ResimId=$_POST['ResimId'];
$OtelId=$_POST['OtelId'];
$ResimYolu=$_POST['ResimYolu'];

$tablo="otelresimler";

$veriler="ResimAdi='$ResimAdi', ResimId='$ResimId', OtelId='$OtelId'";
$gelen="ResimId='$ResimId'";
$datam->Duzelt($tablo,$veriler,$gelen);

?>