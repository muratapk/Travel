<?php
 require_once("../../config/baglan.php");
 $oku=$_REQUEST['oku'];
 $sql="delete from admin where AdminId='$oku'";
 $result=mysqli_query($conn,$sql);
 if($result>0)
 {
    echo "<script>
    setTimeeout(function(){
    alert('Kayıt Silindi');
    window.location.href='index.php';
    },100);
    </script>";
 }

 ?>