<?php

class Errores extends Controller 
{
    public function __construct ()   {
        parent::__construct();
    }

    public function index($value)
    {

        switch ($value) {
            case '403':
                $error=$value;
                break;
            
            case '404':
                $error=$value;
                break;
            case '500':
                $error=$value;
                break;
            
            default:
                $error=$value;
                break;
        }

        $data=["page_name"=>"Error {$error}"];
        $this->view->getView($this,"{$error}",$data);
    }

}





?>
