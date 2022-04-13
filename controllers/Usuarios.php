<?php

class Usuarios extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Usuarios"];
        $this->view->getView($this,"index",$data);
    }
}





?>
