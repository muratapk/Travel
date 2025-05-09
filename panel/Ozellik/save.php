<?php 
require_once("../../config/baglan.php");
$OzelAd=$_POST['OzelAd'];
$OzelSimge=$_POST['OzelSimge'];

$sql="insert into Ozellikler (OzelAd,OzelSimge) values ('$OzelAd','$OzelSimge')";
$result=mysqli_query($conn,$sql);
if($result)
  {
    echo "Kaydınız Yapılmıştır";
    echo "<script>alert('Kayıt Yapılmıştır');
    
          </script>";
    echo "<a href='index.php'>Admin Listeye Dön</a>";
  }
  else
  {
    echo "Kayıt Hatası Oluştu";
  }
?>