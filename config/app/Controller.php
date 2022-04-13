<?php
class Controller 
{
    public function __construct()
    {
        $this->view = new Views();
        $this->cargarModel();
    }
    public function cargarModel()
    {
        $model=get_class($this)."Model";//se toma el nombre de la clase del controllador que se invoco y se le agregar 'Model'
        $ruta= "Models/".$model.".php"; // se crea la ruta del archivo del modelo

        if (file_exists($ruta)) {
            require_once $ruta;//si el modelo existe en la carpeta models se invoca
            $this->model= new $model;
        }
    }
    public function test()
    {
        echo "Main Controller Prueba";
    }
}


?>