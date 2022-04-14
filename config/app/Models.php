<?php

class Models
{
    
    private $conection;
    private $values;
    private $query;
    public function __construct()
    {
       $this->conection=new Conexion();
       $this->conection= $this->conection->conectar();
    }



    public function getAllData(string $query)
    {
        $this->query=$query;
        $sql= $this->conection->prepare($this->query);
        $sql->execute();

        $datos=$sql->fetchAll(PDO::FETCH_ASSOC);


        return $datos;



    }
   
}//Fin de la Clase


?>