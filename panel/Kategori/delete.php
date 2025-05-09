<?php 
require_once("../../config/baglan.php");
$oku=$_REQUEST['oku'];
$sql="delete from kategori where KategoriId='$oku'";
$result=mysqli_query($conn,$sql);
if($result>0)
{
    echo "<script>
    setTimeout(function(){
     alert('Kayıt Silindi');
     window.location.href='index.php';
    },100);
   
    </script>";
}
?>