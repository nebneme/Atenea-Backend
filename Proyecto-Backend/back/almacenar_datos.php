<?php

include '../db/conexion.php';

        if (isset($_POST['almacenar'])) {
            $nit = $_POST['nit'];
            $irazon_social = $_POST['razon_social'];
            $idireccion = $_POST['direccion'];
            $iciudad = $_POST['ciudad'];
            $itelefono = $_POST['telefono'];
            $iencargado = $_POST['encargado'];
            $icomercial = $_POST['comercial'];

            mysqli_query($conexion,"INSERT INTO clientes
            (nit, razon_social, direccion, ciudad, telefono, encargado, comercial) VALUES 
            ('$init','$irazon_social', '$idireccion','$iciudad','$itelefono','$iencargado','$icomercial')");
        }
        header ('location: ../index5.php')
?>