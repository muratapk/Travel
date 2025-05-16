<?php
class database{
 private   $servername = "localhost";
 private   $username = "root";
 private   $password = "";
 private   $db="trevaldb";
 private   $conn;

public function __construct()
{
   $this->conn = mysqli_connect($this->servername, $this->username, $this->password,$this->db);
    
    // Check connection
    if (!$this->conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
}
public function Ekle($kolon,$deger,$tablo)
{
    try{
        $sql="insert into  ". $tablo ." (". $kolon .")  values (".$deger.")";
        $result=mysqli_query($this->conn,$sql);
        if($result)
          {
            echo "Kayıt Başarılı";
          }
          else
          {
            echo "Kayıt Hatası";
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
      echo $sql="update ".$tablo. " set ".$veriler." where ". $gelen;
      $result=mysqli_query($this->conn,$sql);
      if($result)
      {
        echo "Kayıt Düzeltildi";
      }
      else
      {
        echo "Kayıt Hatası";
      }
    }
    catch(Expection $e)
    {
        echo "Hata Oluştu".$e;
    }
}
public function Silme($tablo, $gelen)
{
    try{
      $sql="delete from ".$tablo." where ". $gelen;
      $result=mysqli_query($this->conn,$sql);
      if($result)
      {
        echo "Kayıt Silindi";
      }
      else
      {
        echo "Kayıt Hatası";
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
      $sql="Select * from ".$tablo;
      $result=mysqli_query($this->conn,$sql);
      if($result)
      {
          return $result ?$result->fetch=all (MYSQLI_ASSOC):null;
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
      if($result)
      {
        return $result ?$result->fetch_assoch():null;
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