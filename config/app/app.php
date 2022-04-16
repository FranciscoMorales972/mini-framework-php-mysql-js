<?php
class App
{
    public function __construct()
    {
        $ruta= !empty($_GET["url"]) ? $_GET["url"] : CONTROLLER_DEFAULT."/".METHOD_DEFAULT;

        $arreglo= explode("/",$ruta);
        $controlador=$arreglo[0];

        $metodo= METHOD_DEFAULT;
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

        $dirController= CONTROLLER.DS.$controlador.".php";
        require_once "config/App/Autoload.php";
        require_once "controllers/Errores.php";

        if (file_exists($dirController)) {
            require_once $dirController;
            $controlador =new $controlador();
            if(method_exists($controlador,$metodo)){
                $controlador->$metodo($parrametro);
            }else{
                
                $error= new Errores();
                $error->index("404");
            }
        }else{
            $error= new Errores();
            $error->index("404");
        }

        print_r($parrametro);
    }
}//Fin de la clase





?>