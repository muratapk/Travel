<?php
class database{
 private   $servername = "localhost";
 private   $username = "root";
 private   $password = "";
 private   $db="traveldb";
 private   $conn;

public function __construct()
{
   $this->conn = mysqli_connect($servername, $username, $password,$db);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
}
public function Ekle($deger,$tablo)
{
    try{
        $sql="insert into ".$tablo." values (".$deger.")";
        $result=mysqli_query($this->conn,$sql);
        if(mysqli_num_rows($result)>0)
          {
            echo "Kayıt Başarılı";
          }
      }
   catch(Expection $e)
    {
     echo "Hata Oluştu".$e;
    }

}  

public function Duzelt($tablo,$veriler,$gelen)
{
    try{
      $sql="update ".$tablo. " set ".$veriler." where". $gelen;
      $result=mysqli_query($this->conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
        echo "Kayıt Düzeltildi";
      }
    }
    catch(Expection $e)
    {
        echo "Hata Oluştu".$e;
    }
}
public function Silme($tablo,$veriler,$gelen)
{
    try{
      $sql="delete from ".$tablo." where". $gelen;
      $result=mysqli_query($this->conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
        echo "Kayıt Silindi";
      }
    }
    catch(Expection $e)
    {
        echo "Hata Oluştu".$e;
    }
}

public function TListele($tablo)
{
    try{
      $sql="Select * from ".$tablo.;
      $result=mysqli_query($this->conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
        echo "Kayıt Silindi";
      }
    }
    catch(Expection $e)
    {
        echo "Hata Oluştu".$e;
    }
}
public function ListeleTek($tablo,$gelen)
{
    try{
      $sql="Select * from ".$tablo. " where ".$gelen;
      $result=mysqli_query($this->conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
        echo "Kayıt Silindi";
      }
    }
    catch(Expection $e)
    {
        echo "Hata Oluştu".$e;
    }
}
    
  
    


}
//class bittini nokta burası
$datam=new database();
?>