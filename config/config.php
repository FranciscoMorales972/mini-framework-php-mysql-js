<?php 

define("BASE_URL",'http://localhost/Mini Framework PHP JS FETCH/');


//Constantes para la conexion a base de datos
define("DB_NAME",'mini_framework_db');
define("DB_HOST",'localhost');
define("DB_USER",'root');
define("DB_PASSWORD",'');
define("DB_CHARSET",'utf8');

//INFORMACION DEL SITIO
define("SITE_CHARTSET","utf-8");
define("SITE_NAME","GSF-CURSO");
define("SITE_VERSION","1.0.0");
define("SITE_LOGO","logo.png");
define("SITE_FAVICON","favicon.ico");
define("SITE_DESC","GSF FRAMEWORK");
define("SITE_LOGO_MAIN","main_logo.png");

//ARCHIVOS PUBLICOS
define("ASSETS",BASE_URL."public/assets/");
define("CSS",BASE_URL."public/css/");
define("JS",BASE_URL."public/js/");
define("ICONS",BASE_URL."public/js/font-awesome.js");
define("IMG",ASSETS."images/");
define("PLUGINS",BASE_URL."/public/plugins/");
define("UPLOAD",ASSETS."upload/");

//DIRECTORIOS DE LA APP
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("CONTROLLER",ROOT . DS . "controllers");
define("VIEW",ROOT . DS . "views");
define("LAYOUTS",VIEW. DS."layouts");



//CONSTANTES POR DEFECTO
define("CONTROLLER_DEFAULT","Login");
define("METHOD_DEFAULT","index");

?>