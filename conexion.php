<?php
class Database{

private static $dbName = 'proyecto'; //Base de datos a utilizar en el proyecto
private static $dbhost = 'localhost'; //Nombre del servidor
private static $dbUsername = 'root'; //Nombre de usuario
private static $dbUserPassword = ''; //Contraseña del servidor
private static $cont = null;

public function _construct (){
die('La función de inicio no está permitida');
}
public static function connect (){
if(null == self::$cont){
try{
self::$cont = new PDO ("mysql:host=" .self::$dbhost.";"."dbname=" .self::$dbName, self::$dbUsername, self::$dbUserPassword);
}//TRY
catch (PDOException $e){
die ($e->getMessage());
}//CATCH
}//IF
return self::$cont;
}//CONNECT
public static function disconnect (){
self::$cont = null;
}//DISCONNECT
}//CLASS DATABASE

?>