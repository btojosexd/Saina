<?php
require_once("clases/usuarios.php");
$u=new Usuarios();
if(!isset($_GET["id"]) or !is_numeric($_GET["id"]))
{
    die("error 404");
}
$datos=$u->getDatosPorId($_GET["id"]);
if(sizeof($datos)==0)
{
    die("error 404");
}
if(isset($_POST["nombre"]))
{
    //print_r($_POST);exit;
    $u->update();
    header("Location: index.php?m=2");
}
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>..:: Listado de Usuarios ::..</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    <body>
        
        <div class="container"> 
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Editar Usuario</li>
            </ol>
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Editar usuario</h3>
              </div>
              <div class="panel-body">
                
               <form name="form" action="" method="post">
                    
                    <p>
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" placeholder="Nombre" autofocus="true" class="form-control" required="true" value="<?php echo $datos[0]->nombre;?>" />
                    </p>
                    <p>
                        <label for="correo">E-Mail:</label>
                        <input type="email" name="correo" placeholder="E-Mail" class="form-control" required="true" value="<?php echo $datos[0]->correo;?>" />
                    </p>
                    <p>
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" placeholder="Teléfono" class="form-control" required="true" value="<?php echo $datos[0]->telefono;?>" />
                    </p>
                    <p>
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" class="form-control" value="<?php echo $datos[0]->fecha;?>" />
                    </p>
                    <hr />
                    <input type="hidden" name="id" value="<?php echo $datos[0]->id;?>" />
                    <input type="submit" value="Enviar" />
               </form> 
                
                
                
              </div>
            </div>
        </div>
        <script src="public/js/jquery-1.10.2.js"></script>

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
