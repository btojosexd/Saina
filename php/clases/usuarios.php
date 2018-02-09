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
            id,nombre,ci,fecha,apodo,caracteristica,telefono,representante,anp,dp,tp,anm,dm,tm,foto
            from
            usuario;
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
            id,nombre,ci,fecha,apodo,caracteristica,telefono,representante,anp,dp,tp,anm,dm,tm
            from
            usuario
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
            insert into usuario
            values
           (null,'".$_POST["nombre"]."','".$_POST["ci"]."','".$_POST["fecha"]."','".$_POST["apodo"]."','".$_POST["caracteristica"]."','".$_POST["telefono"]."','".$_POST["representante"]."','".$_POST["ANP"]."','".$_POST["DP"]."','".$_POST["TP"]."','".$_POST["ANM"]."','".$_POST["DM"]."','".$_POST["TM"]."','".$_POST["foto"]."');
            ";
        $this->db->query($sql);
        
    }
     public function update()
    {
        $sql=
         "update usuario set
        nombre= '".$_POST["nombre"]."',
        ci='".$_POST["ci"]."',
        fecha='".$_POST["fecha"]."',
        apodo='".$_POST["apodo"]."',
        telefono='".$_POST["telefono"]."',
        caracteristica='".$_POST["caracteristica"]."',
        representante='".$_POST["representante"]."',
        anp='".$_POST["anp"]."',
        dp='".$_POST["dp"]."',
        tp='".$_POST["tp"]."',
        anm='".$_POST["anm"]."',
        dm='".$_POST["dm"]."',
        tm='".$_POST["tm"]."'
            where
            id='".$_POST["id"]."'
        ";
        $this->db->query($sql);
        
    }

    public function delete()
    {
        $sql=
        "
            delete from usuario
            where
            id='".$_GET["id"]."'
        ";
        $this->db->query($sql);
        
    }

    public function insertarA()
    {
        $sql=
        "
        insert into asunto
        values
           ('".$_POST["id"]."','".$_POST["asunto"]."','".$_POST["des"]."');
            ";
        $this->db->query($sql);
    }
    public function getDatosT($sql)
    {
        $this->usuarios=null; 
        $this->usuarios=array(); 
        
        $datos = $this->db->query($sql);
        while($reg=$datos->fetch_object())
        {
            $this->usuarios[]=$reg;
        }
        return $this->usuarios;
      }
      public function reportePDF($id)
      {
         $sql="
            select
            id,nombre,ci,fecha,apodo,caracteristica,telefono,representante,anp,dp,tp,anm,dm,tm,foto
            from
            usuario
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
   
} 

