<?php

class Roles extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Roles de Usuarios"];
        $this->view->getView($this,"index",$data);
    }
}





?>
