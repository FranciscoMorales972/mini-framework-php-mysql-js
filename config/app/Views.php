<?php

class Views
{
  
   public function getView($controller,$view,$data='') {
       $controlador=get_class($controller);
       if ($controlador=='Home') {
           $vista="views/Home/".$view.".php";
       }else{
           $vista="views/".$controlador."/".$view.".php";
       }
       require_once $vista;



   }

    public function test()
    {
        echo "Prueba";
    }

}//Fin de la Clase


?>