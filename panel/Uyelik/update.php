<?php
require_once("../../config/database.php");
$UyeId = $_POST['UyeId'];
$UyeAd=$_POST['UyeAd'];
$Cep=$_POST['Cep'];
$Mail=$_POST['Mail'];
$Kul=$_POST['Kul'];
$Sifre=$_POST['Sifre'];
$tablo="uyelik";

$veriler=" UyeAd='$UyeAd', Cep='$Cep', Mail='$Mail', Kul='$Kul', Sifre='$Sifre' ";
$gelen="UyeId='$UyeId'";
$datam->Duzelt($tablo,$veriler,$gelen);

?>