<?php
session_start();

unset($_SESSION['Kul']);
session_destroy();
header("Location:Login/index.php");

?>