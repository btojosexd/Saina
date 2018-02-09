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
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <style type="text/css">
           .panel
            {
                       color: black;
                background-color: #eee;
                border-color: #d9d9d9;
            }
        </style>
    </head>
    <body>
        
        <div class="container"> 
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Editar Usuario</li>
            </ol>
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Editar usuario</h3>
              </div>
              <div class="panel-body">
                <form name="form" action="" method="post">
                    
                   <p>
                        <label for="nombre">Apellidos y Nombres:</label>
                        <input type="text" name="nombre" placeholder="Nombre" autofocus="true" class="form-control" required="true" value="<?php echo $datos[0]->nombre;?>"/>
                    </p>
                        <p>
                        <label for="ci">Cedula:</label>
                        <input type="text" name="ci" placeholder="Cedula" class="form-control" required="true" value="<?php echo $datos[0]->ci;?>"/>
                    </p>
                    <p>
                      
                       <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" class="form-control" value="<?php echo $datos[0]->fecha;?>" />
                    </p>
                       <p>
                        <label for="apodo">Apodo:</label>
                        <input type="text" name="apodo" placeholder="Apodo" class="form-control" required="true" value="<?php echo $datos[0]->apodo;?>" />
                    </p>
                    <p>
                        <label for="caracteristica">Caracteristica:</label>
                        <input type="text" name="caracteristica" placeholder="Caracteristica" class="form-control" required="true" value="<?php echo $datos[0]->caracteristica;?>" />
                    </p>
                    <p>
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" placeholder="Teléfono" class="form-control" required="true" value="<?php echo $datos[0]->telefono;?>" />
                    </p>
                    <p>
                        <label for="representante">Representante:</label>
                        <input type="text" name="representante" placeholder="Representante" class="form-control" required="true" value="<?php echo $datos[0]->representante;?>" />
                    </p>
                        <p>
                        <label for="representante">Apellido y Nombre del Padre: </label>
                        <input type="text" name="anp" placeholder="Apellido y Nombre del Padre: " class="form-control" required="true" value="<?php echo $datos[0]->anp;?>" />
                    </p>
                    <p>
                        <label for="representante">Direccion del Padre:</label>
                        <input type="text" name="dp" placeholder="Direccion del Padre" class="form-control" required="true" value="<?php echo $datos[0]->dp;?>" />
                    </p>
                    <p>
                        <label for="telefono">Teléfono del Padre:</label>
                        <input type="text" name="tp" placeholder="Teléfono" class="form-control" required="true" value="<?php echo $datos[0]->tp;?>" />
                    </p>
                        <p>
                        <label for="representante">Apellido y Nombre del Madre: </label>
                        <input type="text" name="anm" placeholder="Apellido y Nombre del Madre: " class="form-control" required="true" value="<?php echo $datos[0]->anm;?>" />
                    </p>
                      <p>
                        <label for="representante">Direccion de la Madre:</label>
                        <input type="text" name="dm" placeholder="Direccion de la Madre" class="form-control" required="true" value="<?php echo $datos[0]->dm;?>" />
                    </p>
                    <p>
                        <label for="telefono">Teléfono de la Madre:</label>
                        <input type="text" name="tm" placeholder="Teléfono" class="form-control" required="true" value="<?php echo $datos[0]->tm;?>" />
                    </p>
                   <input type="hidden" name="id" value="<?php echo $datos[0]->id;?>" />
                    <hr />
                   <button class="btn btn-default pull-right" type="submit">Guardar</button>
               </form>       
                
                
              </div>
            </div>
        </div>
        <script src="public/js/bootstrap.min.js"></script>
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
