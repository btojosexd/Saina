<?php
require_once("clases/usuarios.php");
$u=new Usuarios();
$datos=$u->getDatos();
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
            <div class="panel panel-primary">
              <div class="panel-heading">
                <?php
                if(isset($_GET["m"]))
                {
                    switch($_GET["m"])
                    {
                        case '1':
                            ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro se ha ingresado exitosamente
                            </div>
                            <?php
                        break;
                        case '2':
                            ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro se ha modificado exitosamente
                            </div>
                            <?php
                        break;
                        case '3':
                            ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro se ha eliminado exitosamente
                            </div>
                            <?php
                        break;
                    }
                }
                ?>
                <h3 class="panel-title">Listado de Usuarios #manosenelcódigo</h3>
              </div>
              <div class="panel-body">
                
               
                
                <p>
                <a href="agregar.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
                </p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>E-Mail</th>
                            <th>Teléfono</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($datos as $dato)
                        {
                            ?>
                            <tr>
                                <td><?php echo $dato->id?></td>
                                <td><?php echo $dato->nombre?></td>
                                <td><?php echo $dato->correo?></td>
                                <td><?php echo $dato->telefono?></td>
                                <td><?php echo Helpers::fecha($dato->fecha)?></td>
                                <td>
                                    <a href="editar.php?id=<?php echo $dato->id?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                    <a href="javascript:void(0);" onclick="eliminar('eliminar.php?id=<?php echo $dato->id?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
                
              </div>
            </div>
        </div>
        
         <script src="public/js/jquery-1.10.2.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="public/js/funciones.js"></script>
    </body>
    </html>
