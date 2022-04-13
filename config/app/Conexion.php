<?php 
 class Conexion 
 {
     private $db_host;
     private $db_name;
     private $db_user;
     private $db_pass;
     private $db_charset;
     public $conn;


     public function __construct()
     {
         $this->db_host=DB_HOST;
         $this->db_name=DB_NAME;
         $this->db_user=DB_USER;
         $this->db_pass=DB_PASSWORD;
         $this->db_charset=DB_CHARSET;
     }

     public function conectar()
     {
         $conectionString="mysql:host=".$this->db_host.";dbname=". $this->db_name.";charset".$this->db_charset;


         try {
            $conn = new PDO($conectionString,$this->db_user,$this->db_pass);


            return $conn;
         } catch (PDOException $e) {
            echo "Error al conectar a la base de datos".$e->getMessage();
         }        
     }
 }
 
?>