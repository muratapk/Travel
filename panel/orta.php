<?php
echo $oku=$_REQUEST['sayfa'];
// $bolme=explode("/",$oku);
// echo $bolme[0];
// echo $bolme[1];
// $birlestir=$b
$yol=$oku.'.php';
require_once($yol);
?>