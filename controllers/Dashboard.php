<?php

class Dashboard extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Dashboard"];
        $this->view->getView($this,"index",$data);
    }
}














?>