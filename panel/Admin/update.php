<?php
require_once("../../config/baglan.php");
$AdminId = $_POST['AdminId'];
$kul = $_POST['kul'];
$yetki = $_POST['yetki'];
$sifre = $_POST["sifre"];

$sql = "update admin set kul='$kul', sifre='$sifre', yetki='$yetki' where AdminId='$AdminId'";

$result = mysqli_query($conn, $sql);

if ($result) 
{
    echo "kaydınız yapılmıştır<br>";
    echo "<script>alert('kayıt yapılmıştır');</script>";
    echo "<a href='index.php'>Admin listeye dön </a>";
} else {
    echo "kayıt hatası oluştu: " . mysqli_error($conn);
}
?>