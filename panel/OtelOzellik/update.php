<?php
require_once("../../config/database.php");
$OzelId = $_POST['OzelId'];
$OzelAd = $_POST['OzelAd'];
$OzelSimge = $_POST['OzelSimge'];
$tablo="otelozellik";
$veriler=" OzelAd='$OzelAd', OzelSimge='$OzelSimge' ";
$gelen="OzelId='$OzelId'";
$datam->Duzelt($tablo,$veriler,$gelen);

?>