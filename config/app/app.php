<?php

class App
{
    public function __construct()
    {
        $ruta= !empty($_GET["url"]) ? $_GET["url"] :"Home/index";

        $arreglo= explode("/",$ruta);
        $controlador=$arreglo[0];

        $metodo= "index";
        $parrametro="";

        if (!empty($arreglo[1])) {
            if (!empty($arreglo[1]!="")) {
                $metodo=$arreglo[1];
                
            }
        }
        if (!empty($arreglo[2])) {
            if (!empty($arreglo[2]!="")) {
                for ($i=2; $i < count($arreglo); $i++) { 
                    $parrametro .=$arreglo[$i].",";
                }
                $parrametro=trim($parrametro,",");
            }
        }

        $dirController="controllers/".$controlador.".php";
        require_once "config/App/Autoload.php";
        if (file_exists($dirController)) {
            require_once $dirController;
            $controlador =new $controlador();
            if(method_exists($controlador,$metodo)){
                $controlador->$metodo($parrametro);
            }else{
                echo "NO EXISTE EL METODO SOLICITADO ";
            }
        }else{
            echo "NO EXISTE EL CONTROLADOR SOLICITADO ";
        }

        print_r($parrametro);
    }
}//Fin de la clase





?>