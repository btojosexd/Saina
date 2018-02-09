<?php 
require_once("clases/usuarios.php");
$u=new Usuarios();
if(!isset($_GET["id"]) or !is_numeric($_GET["id"]))
{
	die("error 404");
}
$datos=$u->reportePDF($_GET["id"]);;
if(sizeof($datos)==0)
{
	die("error 404");
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reporte</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading"> Reporte</div>
			<table class="table">
				<tbody>
					<tr ><td rowspan="7"><div><img src="<?php echo $datos[0]->foto;?>"></div></td></tr>
					<tr><td>Apellidos y Nombres:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Cedula:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Fecha:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Apodo:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Caracteristica:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Teléfono:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Representante:</td></tr>
					<tr><td>Apellido y Nombre del Padre:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Direccion del Padre:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Teléfono del Padre:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Apellido y Nombre del Madre:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Direccion de la Madre:<?php echo $datos[0]->nombre;?></td></tr>
					<tr><td>Teléfono de la Madre:<?php echo $datos[0]->nombre;?></td></tr>
	
				</tbody>	
			</table>
		</div>
	</div>
	 <script src="public/js/jquery-1.10.2.js"></script>
             <script src="public/js/bootstrap.min.js"></script>

        <script src="public/js/funciones.js"></script>
           <!-- cdn for modernizr, if you haven't included it already -->
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
        <!-- polyfiller file to detect and load polyfills -->
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
        <script>
          webshims.setOptions('waitReady', false);
          webshims.setOptions('forms-ext', {types: 'date'});
          webshims.polyfill('forms forms-ext');
        </script>
</body>
</html>