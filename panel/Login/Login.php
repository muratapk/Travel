<?php
session_start();
require_once("../../config/baglan.php");
$Kul=$_POST['Kul'];
$Sifre=$_POST['Sifre'];
$sql="Select * from uyelik where Kul='$Kul' && Sifre='$Sifre'";
$result=mysqli_query($conn,$sql);
// if($Kul=="Admin" && $Sifre=="123")
// {
//     $_SESSION['Kul']=$Kul;
//     header("Location:../main.php");
// }
// else
// {
//     echo "<script>window.location.href='index.php'</script>";
// }
if($result)
 {
    $_SESSION['Kul']=$Kul;
    header("Location:../main.php");
 }
 else
 {
    echo "<script>window.location.href='index.php'</script>";
 }
?>