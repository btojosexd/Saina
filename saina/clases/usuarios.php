<?php
require_once("conectar.php");
require_once("helpers.php");
class Usuarios extends Conectar
{
    private $db;
    
    public function __construct() 
    {
        $this->db=parent::conectar();
        parent::setNames();   
    }
    public function getDatos()
    {
        $sql="
            select
            id,nombre,correo,telefono,fecha
            from
            privados;
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }
    public function getDatosPorId($id)
    {
        $sql="
            select
            id,nombre,correo,telefono,fecha
            from
            privados
            where
            id='".$id."'
            ";
       $datos= $this->db->query($sql);
       $arreglo=array();
       while($reg=$datos->fetch_object())
       {
            $arreglo[]=$reg;
       }  
       return $arreglo;   
    }
    public function insertar()
    {
        $sql=
        "
            insert into privados
            values
            (null,'".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["telefono"]."','".$_POST["fecha"]."');
        ";
        $this->db->query($sql);
        
    }
    public function update()
    {
        $sql=
        "
            update privados
            set
            nombre='".$_POST["nombre"]."',
            correo='".$_POST["correo"]."',
            telefono='".$_POST["telefono"]."',
            fecha='".$_POST["fecha"]."'
            where
            id='".$_POST["id"]."'
        ";
        $this->db->query($sql);
        
    }
    public function delete()
    {
        $sql=
        "
            delete from privados
            where
            id='".$_GET["id"]."'
        ";
        $this->db->query($sql);
        
    }
}
