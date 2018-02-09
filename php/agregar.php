<?php
require_once("clases/usuariosrespaldo.php");
if(isset($_POST["nombre"]))
{
    //print_r($_POST);exit;
    $u=new Usuarios();
    $u->insertar();
    header("Location: index.php?m=1");
}
?>
<!DOCTYPE html>
    <html>
    <head>
      <style type="text/css">
  #my_camera{
    margin: auto;
    padding-top: 0;
    padding-right: 10px;
  }
  #results{
    padding-left:10px;
    height: 125px; 
    width: 100; 
  }
  .card-img-top
  {
    width:300px;
    height: 225px;
    padding-top:37px;
  }
  .btn-group
  {
    padding: 20px;
    margin: auto;
  }
  .panel panel-body
  {
    width: 500px;
    height: 500px;
  }
.panel>.panel-heading {
    color: black;
    background-color: #eee;
    border-color: #d9d9d9;
}
.panel-info {
    border-color: black;
}
</style>
        <meta charset="utf-8" />
        <title>..:: Listado de Usuarios ::..</title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    </head>
    <body>
        <main role="main">
        <div class="container"> 
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Agregar Usuario</li>
            </ol>
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Agregar usuario</h3>
              </div>
             
              <div class="panel-body">   
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow" id="my_camera"></div>
              </div>
            </div>
           <form class="btn-group" >
      <input type="button" value="Tomar foto" id="" onClick="take_snapshot()">
    </form>
          </div>
        </div>
      </div>
      <div class="panel">
      <div class="panel-heading"> Datos 
      <div class="panel-body">
               <form name="form" action="" method="post">
                    
                    <p>
                        <label for="nombre">Apellidos y Nombres:</label>
                        <input type="text" name="nombre" placeholder="Nombre" autofocus="true" class="form-control" required="true" />
                    </p>
                        <p>
                        <label for="ci">Cedula:</label>
                        <input type="text" name="ci" placeholder="Cedula" class="form-control" required="true" />
                    </p>
                    <p>
                      
                       <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" class="form-control" />
                    </p>
                       <p>
                        <label for="apodo">Apodo:</label>
                        <input type="text" name="apodo" placeholder="Apodo" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="caracteristica">Caracteristica:</label>
                        <input type="text" name="caracteristica" placeholder="Caracteristica" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" placeholder="Teléfono" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="representante">Representante:</label>
                        <input type="text" name="representante" placeholder="Representante" class="form-control" required="true" />
                    </p>
                        <p>
                        <label for="representante">Apellido y Nombre del Padre: </label>
                        <input type="text" name="ANP" placeholder="Apellido y Nombre del Padre: " class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="representante">Direccion del Padre:</label>
                        <input type="text" name="DP" placeholder="Direccion del Padre" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="telefono">Teléfono del Padre:</label>
                        <input type="text" name="TP" placeholder="Teléfono" class="form-control" required="true" />
                    </p>
                        <p>
                        <label for="representante">Apellido y Nombre del Madre: </label>
                        <input type="text" name="ANM" placeholder="Apellido y Nombre del Madre: " class="form-control" required="true" />
                    </p>
                      <p>
                        <label for="representante">Direccion de la Madre:</label>
                        <input type="text" name="DM" placeholder="Direccion de la Madre" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="telefono">Teléfono de la Madre:</label>
                        <input type="text" name="TM" placeholder="Teléfono" class="form-control" required="true" />
                    </p>
                    <div id="foto"></div>
                    <hr />
                   <button class="btn btn-default pull-right" type="submit">Guardar</button>
               </form>
               </div>
               </div>
               </div>  
               </div>    
                    </div>
              </div>
            </div>
          </main>
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
<script type="text/javascript" src="webcam.js"></script>
  
  <!-- Configure a few settings and attach camera -->
  <script language="JavaScript">
    Webcam.set({
      width: 300,
      height: 300,
      image_format: 'jpeg',
      jpeg_quality: 90
    });
    Webcam.attach( '#my_camera' );
  </script>
  
  <!-- A button for taking snaps -->
  
  
  <!-- Code to handle taking the snapshot and displaying it locally -->
  <script language="JavaScript">
    function take_snapshot() {
      // take snapshot and get image data
      Webcam.snap( function(data_uri) {      
          
        Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
          document.getElementById('my_camera').innerHTML = 
          '<img class="card-img-top"  src="'+text+'"/>';

           document.getElementById('foto').innerHTML = 
           '<input type="hidden" name="foto" value="'+text+'">'; 
        } );  
      } );
    }
  </script>
    </body>
    </html>
