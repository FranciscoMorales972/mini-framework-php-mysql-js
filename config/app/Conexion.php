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

     public static function query($sql,$params=[])
     {
         $db = new Conexion();

          $link= $db->conectar();

         $link->beginTransaction(); //captura los errores de las transacciones
         $query= $link->prepare($sql);

         if (!$query->execute($params)) {
            $link->rollBack();
            $error=$query->errorInfo();
            throw new Exception($error[2]);
         }


         //SELECT | INSERT | UPDATE | DELETE | ALTER
         //manejo de las consultas a la base de datos dinamicamente

         if (strpos($sql,'SELECT')!==false) {
            return $query->rowCount() > 0 ?$query->fetchAll(PDO::FETCH_ASSOC) : false;
         }
         elseif (strpos($sql,'INSERT')!==false) {
             $id=$link->lastInsertId();
             $link->commit();
            return $id;
         }elseif (strpos($sql,'UPDATE')!==false) {
            $link->commit();
            return true;
           }
           elseif (strpos($sql,'UPDATE')!==false) {
                if ($query->rowCount() > 0) {
                    # code...
                    $link->commit();
                    return true;
                }
                $link->rollBack();
                return false;
           }else {
                 $link->commit();
                 return true;
        }
     }
 }
 
?>