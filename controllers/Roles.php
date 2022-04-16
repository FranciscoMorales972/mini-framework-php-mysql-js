<?php

class Roles extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Roles de Usuarios"];

        $datos=["rol"=>"WebSite Update"];
        //SELECT
        $data["roles"]=RolesModel::listEqual("tbl_roles");

        //UPDATE
        //RolesModel::update("tbl_roles",$datos,["rolID"=>3]);

        //INSERT
       // RolesModel::insert("tbl_roles",$datos);
    
        //DELETE
        $id=3;
        //RolesModel::delete("tbl_roles",["rolID"=>$id]);
        $this->view->getView($this,"index",$data);
    }
}





?>
