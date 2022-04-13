<?php 
// path of the log file where errors need to be logged
$log_file = "./php_errors.log"; /* ./ hace referencia a la ruta base del proyecto */
  
error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', TRUE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

// setting error logging to be active
ini_set('log_errors', TRUE); // Error/Exception file logging engine.

// setting the logging file in php.ini
ini_set("error_log",$log_file);

error_log( "Aplicacion Web Iniciada" );



?>