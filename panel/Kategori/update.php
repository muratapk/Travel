<?php
require_once("../../config/baglan.php");
$KategoriId = $_POST['KategoriId'];
$KategoriAdi = $_POST['KategoriAdi'];

$sql = "update kategori set KategoriAdi='$KategoriAdi' where KategoriId='$KategoriId'";

$result = mysqli_query($conn, $sql);

if ($result) 
{
    echo "kaydınız yapılmıştır<br>";
    echo "<script>alert('kayıt yapılmıştır');</script>";
    echo "<a href='index.php'>Kategori listeye dön </a>";
} else {
    echo "kayıt hatası oluştu: " . mysqli_error($conn);
}
?>