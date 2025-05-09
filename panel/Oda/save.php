<?php
 require_once("../../config/baglan.php");
 $OdaNo=$_POST['OdaNo'];
 $OdaAdi=$_POST['OdaAdi'];
 $OdaFiyat=$_POST['OdaFiyat'];
 $OdaDurum=$_POST['OdaDurum'];

 $sql="insert into oda (OdaNo, OdaAdi, OdaFiyat, OdaDurum) values ('$OdaNo','$OdaAdi','$OdaFiyat','$OdaDurum')";
 $result=mysqli_query($conn,$sql);
 if($result)
 {
    echo "Kaydınız Yapılmıştır";
    echo "<script>alert('Kaydınız Yapılmıştır');
     
          </script>";
   echo "<a href='index.php'>Oda Listeye Dön</a>";      
 }
 else
 {
    echo "Kayıt Hatası Oluştu";
 }
 ?>