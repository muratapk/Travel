<?php 
require_once("../../config/database.php");
$UyeAd=$_POST['UyeAd'];
$Cep=$_POST['Cep'];
$Mail=$_POST['Mail'];
$Kul=$_POST['Kul'];
$Sifre=$_POST['Sifre'];
$tablo="uyelik";
$kolon='UyeAd, Cep, Mail, Kul, Sifre';
$deger="'$UyeAd','$Cep','$Mail','$Kul','$Sifre'";
$datam->Ekle($kolon, $deger, $tablo);

?>