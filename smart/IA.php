<?php

    require_once 'include/DB_Functions.php';
    $db = new DB_Functions();

	
	$temp = $_GET["temp"];
	$hum = $_GET["hum"];
	$value = $_GET["value"];
$db->AddTemp(0,$temp,$hum,$value);

echo  "ok";

?>