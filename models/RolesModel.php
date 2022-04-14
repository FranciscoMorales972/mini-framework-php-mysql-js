<?php

class RolesModel extends Models
{
    public $rolID;
    public $rol;
    public $estado_rol;
    private $conection;
    public function __construct()
    {
        $this->conection=new Conexion();
       $this->conection= $this->conection->conectar();
    }



    public function listarRoles()
    {
        $query="SELECT * FROM tbl_roles";
        $sql= $this->conection->prepare($query);
        $sql->execute();

        $datos=$sql->fetchAll(PDO::FETCH_ASSOC);


        return $datos;



    }
}


?>