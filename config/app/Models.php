<?php

class Models extends Conexion
{
    
  // listar registros desde la base de datos o un solo registro
   
  public static function listEqual($tabla,$params=[],$limit=null)
  {//SELECT
    $cols_values="";
    $limites="";
    
    
    if (!empty($params)) {
        $cols_values .="WHERE ";

        foreach ($params as $key => $key) {
            $cols_values .="{$key} = :{$key} AND";
        }

        $cols_values = substr($cols_values,0,-3);
    }
    if ($limit !==null) {
        $limites = "LIMIT {$limit}";
    }

    $stmt="SELECT *FROM $tabla {$cols_values} {$limites}";


    //llamamos la conexion a la base de datos

    if (!$rows = parent::query($stmt,$params)) {
        return false;
    }
    return $limit ===1 ? $rows[0] : $rows;
  }



  public static function insert($table,$params)
  {
     //INSERT

    
     $campos="";//campos en la tabla
     $valores="";


     foreach ($params as $key => $values) {
       $campos .="{$key} ,";
       $valores .=":{$key} ,";
     }

     $campos=substr($campos,0,-1);
     $valores=substr($valores,0,-1);
     $consulta="INSERT INTO {$table} ({$campos}) VALUES({$valores})";

     if ($id=parent::query($consulta,$params)) {
        return $id;
     }else{
       return false;
     }
  }




}//Fin de la Clase


?>