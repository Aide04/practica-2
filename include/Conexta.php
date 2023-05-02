<?php
$conexion = null;
$servidor = "localhost";
$bd="practica1";
$user="root";
$pass="";
try{
    $conexion= new PDD('mysql:host='.$servidor.';dbname'.$bd,$user,$pass);
}catch (PDOExeption $e){
    echo"Error de conexion!";
    exit;
}
return $conexion;
?>