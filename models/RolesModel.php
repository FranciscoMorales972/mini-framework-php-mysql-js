<?php

class RolesModel extends Models
{
    public $rolID;
    public $rol;
    public $estado_rol;
    public function __construct()
    {
        parent::__construct();
    }



    public function listarRoles()
    {
       $query="SELECT * FROM tbl_roles WHERE estado_rol=1";
       $datosConsulta=$this->getAllData($query);


        return $datosConsulta;



    }
}


?>