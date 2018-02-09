<?php
require_once("clases/usuariosrespaldo.php");
$u=new Usuarios();
$datos=$u->getDatos();
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>..:: Listado de Usuarios ::..</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="public/fancybox/jquery.fancybox.css" />
        <style type="text/css">

        </style>
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
                        case '4':
                            ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El Asunto se ha Agregado exitosamente
                            </div>
                            <?php
                        break;
                    }
                }
                ?>
                <h3 class="panel-title">Listado de Usuarios</h3>
              </div>
              <div class="panel-body">
                
               
                <p>
                <a href="agregar.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
                </p>
               <div class="row">
                       
                        <?php
                        foreach($datos as $dato)
                        {
                            ?>
                        <div class="col-md-3">   
                        <div class="thumbnail">
                            <a href="<?php echo $dato->foto?>" class="fancybox"><img src="<?php echo $dato->foto?>"></a>
                            <p class="caption">Thumbnail Images </p>
                             <p class="caption">Thumbnail Images </p>
                        </div>
                    </div>
                         <?php
                         }
                     ?>
                </div>    
              </div>
            </div>
        </div>
         <script src="public/js/jquery-1.10.2.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/funciones.js"></script>
    <script type="text/javascript" src="public/fancybox/jquery.fancybox.js"></script>
 <script type="text/javascript">
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
    
});
</script>
    </body>
    </html>
 

 <!--


                                     <a href="eliminar.php?id=<?php echo $dato->id?>"><span class="glyphicon glyphicon-trash" aria-hidden="true" title="Eliminar"></span></a>
                                    <a href="asunto.php?id=<?php echo $dato->id?>"><span class="glyphicon glyphicon-file" aria-hidden="true" title="Asunto" ></span></a>
                                     <a href="reporte.php?id=<?php echo $dato->id?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" title="Asunto" ></span></a>
  -->