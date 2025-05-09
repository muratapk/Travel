<?php 
require_once("../../config/baglan.php");
$KategoriAdi=$_POST['KategoriAdi'];

$sql="insert into kategori (KategoriAdi) values ('$KategoriAdi')";
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