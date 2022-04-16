<?php 

define("BASE_URL",'http://localhost/Mini Framework PHP JS FETCH/');


//Constantes para la conexion a base de datos
define("DB_NAME",'mini_framework_db');
define("DB_HOST",'localhost');
define("DB_USER",'root');
define("DB_PASSWORD",'');
define("DB_CHARSET",'utf8');


//DIRECTORIOS DE LA APP
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("CONTROLLER",ROOT . DS . "controllers");



//CONSTANTES POR DEFECTO
define("CONTROLLER_DEFAULT","Login");
define("METHOD_DEFAULT","index");

?>