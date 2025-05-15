<?php
if(isset($_REQUEST['sayfa']) || !empyt($_REQUEST['sayfa']))
{
    $oku=$_REQUEST['sayfa'];
    // $bolme=explode("/",$oku);
    // echo $bolme[0];
    // echo $bolme[1];
    // $birlestir=$b
    $yol=$oku.'.php';
    require_once($yol);

}
else
{
    require_once("blank.php");
}


?>