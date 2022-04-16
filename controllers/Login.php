<?php

class Login extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Login de Sistema"];
        $this->view->getView($this,"index");
    }
}





?>
