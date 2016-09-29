<?php
$host ="localhost";
$user ="root";
$contra = "";
$db = "promotor";
$conexion = @mysql_connect($host,$user,$contra,$db);

if(!$conexion)
{
	die ("no se conecta porque: ".mysql_error());
}

mysql_select_db($db,$conexion);

?>