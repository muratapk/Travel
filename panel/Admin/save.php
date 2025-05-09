<?php 
require_once("../../config/baglan.php");
$Kul=$_POST['Kul'];
$Yetki=$_POST['Yetki'];
$Sifre=$_POST["Sifre"];
$sql="insert into admin (Kul,Sifre,Yetki) values ('$Kul','$Sifre','$Yetki')";
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