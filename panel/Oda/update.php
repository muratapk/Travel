<?php
require_once("../../config/baglan.php");

$OdaId = $_POST['OdaId'];
$OdaAdi = $_POST['OdaAdi'];
$OdaFiyat = $_POST['OdaFiyat'];
$OdaDurum = $_POST['OdaDurum'];

if ($OdaId != "" && is_numeric($OdaFiyat)) {
    $sql = "UPDATE oda SET OdaAdi='$OdaAdi', OdaFiyat='$OdaFiyat', OdaDurum='$OdaDurum' WHERE OdaId='$OdaId'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
        setTimeout(function(){
            alert('Kayıt Güncellendi');
            window.location.href='index.php';
        }, 100);
        </script>";
    }
}
?>
