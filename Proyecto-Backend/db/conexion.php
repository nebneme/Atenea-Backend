<?php
$host ='localhost';
$usuario='root';
$contraseña='';
$basededatos='clientes';

$conexion = new mysqli($host,$usuario,$contraseña,$basededatos);

if ($conexion->connect_errno) {
   
    exit();
}
    else {
  
    }
?>