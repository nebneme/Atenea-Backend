<?php

include '../db/conexion.php';

if (isset($_POST['act'])) {
    $init = $_POST['act_nit'];
    $irazon_social = $_POST['act_razon_social'];
    $idireccion = $_POST['act_direccion'];
    $iciudad = $_POST['act_ciudad'];
    $itelefono = $_POST['act_telefono'];
    $iencargado = $_POST['act_encargado'];
    $icomercial = $_POST['act_comercial'];

    mysqli_query($conexion,"UPDATE clientes SET razon_social = '$irazon_social', direccion = '$idireccion', ciudad ='$iciudad',telefono ='$itelefono', encargado = '$iencargado', comercial ='$icomercial'
    WHERE nit = '$init'");
    
}
header ('location: ../index5.php')

?>