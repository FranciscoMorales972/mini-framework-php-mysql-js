<?php

class Roles extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Roles de Usuarios"];
        //$data=["roles"=>RolesModel::listEqual("tbl_roles")];
        $datos=["rol"=>"WebSite",
        "estado_rol"=>1];
        RolesModel::insert("tbl_roles",$datos);
        $this->view->getView($this,"index",$data);
    }
}





?>
