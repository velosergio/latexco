<?php

// Definicion de entorno.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','latexco');
 
// Ahora, establecemos la conexión.
try
{
// PDO
$connect = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

// MySQLI
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}

?>