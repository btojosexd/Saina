<?php
require_once("clases/usuarios.php");
$u=new Usuarios();
$cantidad_resultados_por_pagina=20;

    if(isset($_GET["pagina"]))
    {
        if(is_numeric($_GET["pagina"]))
        {
            if($_GET["pagina"]==1)
            {
                header("Location: index.php");
            }else
            {
                $pagina=$_GET["pagina"];
            }
            
        }else
        {
           header("Location: index.php"); 
        }
    }else
    {
        //header("Location: listado.php");
        $pagina=1;
    }
    //echo $pagina;exit;
    $empezar_desde=($pagina-1 )*$cantidad_resultados_por_pagina;
    $sql1="
        select count(*) as cuantos from usuario;
    ";
    $todos=$u->getDatosT($sql1);
    $sql="
        select nombre,ci,foto from usuario
        order by id asc
        limit ".$empezar_desde.",".$cantidad_resultados_por_pagina."
    ";
    //echo $sql;exit;
    $datos=$u->getDatosT($sql);
    //print_r($datos);exit;
    //obtenemos el total de páginas existentes
    $total_paginas=ceil($todos[0]->cuantos/$cantidad_resultados_por_pagina);
    //echo $total_paginas;exit;
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Paginación de registros con PHP</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        </head>
        <style type="text/css">
           body {
                    font-size: 10px;
                }
            p
            {
                margin: -5px;
            }
            .thumbnail
            {
                padding: 10px;
                margin: 10px;
            }
            .cold-md-3
            {
                margin:0px;
                padding: 0px;
            }
            .fancybox
            {
                margin:0px;
                padding: 0px;
            }
        </style>
        <body>
            
            <div class="container">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Listado de Usuarios</h3>
                     </div>
                      <div class="panel-body">
                        <p>
                <a href="agregar.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
                </p>
                <div class="row">
                                    <?php
                                    $impresos=0;
                                    foreach($datos as $dato)
                                    {
                                        $impresos++;
                                        ?>
                                         <div class="col-md-3">   
                                            <div class="thumbnail">
                                         <a href="<?php echo $dato->foto?>" class="fancybox"><img src="<?php echo $dato->foto?>"></a>
                                         <p class="caption"><?php echo $dato->ci?> </p>
                                         <p class="caption"><?php echo $dato->nombre?></p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <table class="table" >
                                        <tbody>
                                <tr>
                                    <td colspan="3">
                                        <div class="pull-center">
                                            <ul class="pagination">
                                                <li><a href="index.php">&#60;&#60;&#60;&#60;</a></li>
                                                <?php
                                                if($pagina==1)
                                                {
                                                    ?>
                                                    <li class="disabled"><a href="javascript:void(0);">&#60;&#60;</a></li>
                                                    <?php
                                                }else
                                                {
                                                    $anterior=$pagina-1;
                                                    ?>
                                                    <li><a href="index.php?pagina=<?php echo $anterior?>">&#60;&#60;</a></li>
                                                    <?php
                                                }
                                                ?>
                                                
                                                <?php
                                                for($i=1;$i<=$total_paginas;$i++)
                                                {
                                                    ?>
                                                    <li <?php if($pagina==$i){echo 'class="active"';}?>><a href="index.php?pagina=<?php echo $i;?>"><?php echo $i?></a></li>
                                                    <?php
                                                }
                                                ?>
                                                
                                                
                                                
                                                <?php
                                                if($impresos==$cantidad_resultados_por_pagina and $pagina<$total_paginas)
                                                {
                                                    $proximo=$pagina+1;
                                                    ?>
                                                    <li><a href="index.php?pagina=<?php echo $proximo?>">&#62;&#62;</a></li>
                                                    <?php
                                                }else
                                                {
                                                    ?>
                                                    <li class="disabled"><a href="javascript:void(0);">&#62;&#62;</a></li>
                                                    <?php
                                                }
                                                ?>
                                                
                                                
                                                
                                                <li><a href="index.php?pagina=<?php echo $total_paginas?>">&#62;&#62;&#62;&#62;</a></li>
                                            </ul>
                                            </tbody>
                                            </table>
                                    </div>
                                      </div>
                    </div>
                </div>
            </div>
                 <script src="public/js/jquery-3.2.1.js"></script>
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
listado