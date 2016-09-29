<?php
error_reporting(0);
$busca="";
$busca=$_POST['busca'];
mysql_connect("localhost","root","");// si haces conexion desde internnet usa 3 parametros si es a nivel local solo 2
mysql_select_db("promotor");//nombre de la base de datos
if($busca!=""){
$busqueda=mysql_query("SELECT * FROM promotor WHERE nombre_promotor LIKE '%".$busca."%'");//cambiar nombre de la tabla de busqueda
?>
<style type="text/css">
<!--
#Layer1 {	position:absolute;
	width:180px;
	height:70px;
	z-index:1;
	left: 178px;
	top: 11px;
}
#Layer2 {	position:absolute;
	width:197px;
	height:82px;
	z-index:2;
	left: 922px;
	top: 13px;
}
-->
</style>

<center>
<div id="Layer1">
  <div align="center"><img src="image/C1.jpg" width="162" height="64" /></div>
</div>
<div id="Layer2">
  <div align="center"><img src="image/tesi.png" width="162" height="64" /></div>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div align="center">
  <table width="533" border="1" id="tab">
    <tr>
      <td width="194"><div align="center">Id promotor </div></td>
      <td width="323"><div align="center">Nombre Promotor</div></td>
     </tr>
    
  <?php

while($f=mysql_fetch_array($busqueda)){
echo '<tr>';
echo '<td width="8" align="center">'.$f['Id_promotor'].'</td>';
echo '<td width="15" align="center">'.$f['nombre_promotor'].'</td>';
echo '</tr>';
}
}
?>
  </table>
</div>
<p align="center">&nbsp;</p>
