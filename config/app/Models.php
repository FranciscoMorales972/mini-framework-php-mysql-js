<?php

class Models extends Conexion
{
    
  // listar registros desde la base de datos o un solo registro
   
  public static function listEqual($tabla,$params=[],$limit=null)
  {
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
}//Fin de la Clase


?>