<?php
require_once("../../config/database.php");
$OtelOdaId=$_POST['OtelOdaId'];
$OtelId=$_POST['OtelId'];
$OdaId=$_POST['OdaId'];

$tablo="oteloda";

$veriler="OtelOdaId='$OtelOdaId', OtelId='$OtelId', OdaId'$OdaId'";
$gelen="OtelOdaId='$OtelOdaId'",
$datam->Duzelt($tablo,$veriler,$gelen);

?>