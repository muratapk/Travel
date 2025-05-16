<?php
require_once("../config/baglan.php");
echo $kul=$_POST['kul'];
echo $sifre=$_POST['sifre'];
if($kul=="Admin" && $sifre=="123")
{
  header('Location:main.php');
}
else
{
  echo "<script>
  window.location.href='index.php';
  </script>";

}

?>