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

  public static function  joinTable($tabla1,$tabla2,$value1,$value2,$params=[],$limit=null)
  {//SELECT JOIN
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

    $stmt="SELECT *FROM $tabla1
    INNER JOIN $tabla2
    on $tabla1.$value1=$tabla2.$value2 {$cols_values} {$limites}";

    
    //llamamos la conexion a la base de datos

    if (!$rows = parent::query($stmt,$params)) {
        return false;
    }
    return $limit ===1 ? $rows[0] : $rows;
  }//Fin funcion SELECT



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
  }//Fin funcion INSERT
  public static function update($tabla,$params=[],$id=[])
  {
    //UPDATE `tabla` SET `produtoID`=[value-1],`nombre_producto`=[value-2],`pro_categoriaID`=[value-3] WHERE 1
    $campos="";
    $valores="";

    foreach ($params as $key => $value) {
      $valores .="{$key} = :{$key} ,";
    }

    $valores=substr($valores,0,-1);

    if (count($id) > 1 ) {
        foreach ($id as $key => $value) {
          $campos .="{$key} = :{$key} AND";
        }
        $campos = substr($campos,0,-3);
    }else{
      foreach ($id as $key => $value) {
        $campos .= "{$key} = :{$key}";
      }
    }
    $stmt="UPDATE {$tabla} SET {$valores} WHERE {$campos}";

    if (!parent::query($stmt,array_merge($params,$id))) {
      return false;
    }

    return true;
 
  }//Fin funcion UPDATE  

 public static function delete($tabla,$params=[],$limit=1){
  $campos="";
  $limites="";
  if (!empty($params)) {
    $campos .="WHERE ";
    foreach ($params as $key => $value) {
      $campos .="{$key} = :{$key} AND";
    }

    $campos=substr($campos,0,-3);
  }

  if ($limites!==null) {
    $limites="LIMIT {$limit}";
  }

  $stmt="DELETE FROM {$tabla} {$campos}{$limites}";

  if (!$row=parent::query($stmt,$params)) {
    return false;
  }

  return $row;

 }//Fin funcion DELETE  

}//Fin de la Clase


?>