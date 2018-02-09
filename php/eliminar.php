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
$u->delete();
header("Location: index.php?m=3");
?>