<?php

class Home extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Home Page"];
        $this->view->getView($this,"index",$data);
    }
}





?>
