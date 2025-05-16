<?php
if(isset($_REQUEST['sayfa']) || !empty($_REQUEST['sayfa']))
{
    echo $oku=$_REQUEST['sayfa'];
// $bolme=explode("/",$oku);
// echo $bolme[0];
// echo $bolme[1];
// $birlestir=
$yol=$oku.'.php';
require_once($yol);


}
else 
{
    require_once("blank.php");
}

?>