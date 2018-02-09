<?php
require_once("clases/usuarios.php");
$id=$_GET['id'];
if(isset($_POST["asunto"]))
{
    //print_r($_POST);exit;
    $u=new Usuarios();
    $u->insertarA();
    header("Location: index.php?m=4");

}
?>
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>..:: Asunto ::..</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container"> 
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Agregar Asunto</li>
            </ol>
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Agregar Asunto</h3>
              </div>
              <div class="panel-body"
 >               
               <form name="form" action="" method="post">
                    
                    <p>
                        <label for="asunto">Asunto:</label>
                        <input type="text" name="asunto" placeholder="Asunto" autofocus="true" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="des">Descripcion:</label>
                        <textarea name="des" class="form-control" placeholder="Descripcion"></textarea>
                    </p>
                    <hr />
                    <div id="hidden"></div>
                    <input type="submit" value="Enviar" />
               </form> 
              </div>
            </div>
        </div>
             <?php
        if(isset($_GET["id"]))
        {
            ?>
            <script type="text/javascript">
                 document.getElementById('hidden').innerHTML =
                 '<input type="hidden" name="id" value="<?php echo $id ?>">';
            </script>
            <?php
        }
            ?>
        <script src="public/js/jquery-1.10.2.js"></script>

        <script src="public/js/funciones.js"></script>
           <!-- cdn for modernizr, if you haven't included it already -->
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
        <!-- polyfiller file to detect and load polyfills -->
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
    </body>
    </html>