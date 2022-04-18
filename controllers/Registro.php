<?php

class Registro extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index()
    {
        $data=["page_name"=>"Register Page"];
        $data=["page_script"=>"registro.js"];
        $this->view->getView($this,"index",$data);
    }
    public function save()
    {
        $data=[];
        $username=$_POST["username"];
        $userEmail=$_POST["userEmail"];
        $userPass=$_POST["userPass"];
        $userPassConfirm=$_POST["userPassConfirm"];
        //arrayFormatter($_POST);

        if ($_SERVER["REQUEST_METHOD"]==="POST") {
            $data=["status"=>'ok',"msg"=>"datos registrados"];
        }


        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
}





?>
