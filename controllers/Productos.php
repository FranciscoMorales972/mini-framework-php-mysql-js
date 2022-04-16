<?php

class Productos extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Productos Page"];
        $data["productos"]=ProductosModel::joinTable("tbl_productos","tbl_categorias","pro_categoriaID","categoriaID",["pro_categoriaID"=>1]);
        $this->view->getView($this,"index",$data);
    }
}





?>
