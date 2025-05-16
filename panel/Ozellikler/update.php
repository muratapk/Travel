<?php
require_once("../../config/baglan.php");
$OzelId = $_POST['OzelId'];
$OzelAd = $_POST['OzelAd'];
$OzelSimge= $_POST['OzelSimge'];


$sql = "update ozellikler set OzelAd='$OzelAd',OzelSimge='$OzelSimge'  where OzelId='$OzelId'"; ;

$result = mysqli_query($conn, $sql);

if ($result) 
{
    echo "kaydınız yapılmıştır<br>";
    echo "<script>alert('kayıt yapılmıştır');</script>";
    echo "<a href='index.php'>Ozellikler listeye dön </a>";
} else {
    echo "kayıt hatası oluştu: " . mysqli_error($conn);
}
?>