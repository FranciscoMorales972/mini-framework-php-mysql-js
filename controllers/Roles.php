<?php

class Roles extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Roles de Usuarios",
                "roles"=>RolesModel::listEqual("tbl_roles",["rolID"=>1],1)
            ];
        $this->view->getView($this,"index",$data);
    }
}





?>
