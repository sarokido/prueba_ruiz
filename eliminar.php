<html>
<head>
<title>borrar.php</title>
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
</head>
	<body>
	<center>
    <div id="Layer1">
      <div align="center"><img src="image/C1.jpg" width="162" height="64"></div>
    </div>
    <div id="Layer2">
      <div align="center"><img src="image/tesi.png" width="162" height="64"></div>
    </div>
    <p>&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">
      <?php

	include("conexion.php");
	$consulta = mysql_query("SELECT * FROM promotor", $conexion) or die ("Error al consultar: " .mysql_error());
?>	
    </p>
    <div align="center">
      <table width = "40%" border="2">
        <tr>
          <td>Id promotor</td>
		  <td>Nombre promotor</td>
	  </tr>
        
  <?php
while ($filas = mysql_fetch_array($consulta))
{
	$Id_promotor=$filas ['Id_promotor'];
	$nombre_promotor=$filas ['nombre_promotor'];
?>	
        
        <tr>
          <td><div align="center"><?php echo "<p style='color:#656;'>".$Id_promotor."</p>";?></div></td>
		  <td><div align="center"><?php echo "<p style='color:#585;'>".$nombre_promotor."</p>";?></div></td>
		  <td>
		    <form method = "POST" action="">
		      <input type="submit" value="eliminar" name="eliminar" />
		      </form>		  </td>
	  </tr>
        
  <?php
}

if (isset($_POST['eliminar']))
{
	mysql_query("DELETE FROM promotor WHERE Id_promotor = '$Id_promotor'", $conexion) or die("ERROR al eliminar: " .mysql_error());
	
	header ('refresh: 1; url=eliminar.php');
	
	echo "<p style='color:green;'>ELIMINACION EXITOSA</p>" .mysql_error();
}
?>	
      </table>
      <a href = "index.php">Regresar</a>
    </div>
	</body>
</html>
