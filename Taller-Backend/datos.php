<?php

    include 'db/conexion.php';

    $query = mysqli_query($conexion,"SELECT * FROM usuarios");
    $query2 = mysqli_query($conexion,"SELECT cedula FROM usuarios");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style_datos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>ejercicio5</title>
</head>
<body>
      <!-- imagen para regresar a la pagina principal-->
    <a href="index.php">   
        <img class="home" src="imagenes/regreso.png" alt="">
    </a>

    <!--contenedores para el filtrar y buscar hacen referencia a los archivos de JS y de CSS de bootstrap-->
        <div class="wrapper">
        <div class="container">
            <div class="filter">
            <div class="row">
                <div class="col-sm-4">
                <div class="show-row">
                    <select class="form-control">
                    <option value="5" selected="selected">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    </select>
                </div>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                <div class="search-row">
                    <input type="text" name="search" class="form-control" placeholder="Enter your keyword">
                </div>
                </div>
            </div>
            </div>
        <table id="music" class="table table-responsive table-hover">
            <thead>
            <tr  class="myHead">
    <!--tabla asignanda para visualizar los datos-->
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
            </tr>
            </thead>
            <tbody>

            <?php
            /*ciclo while con arreglo de datos segun la informacion de la bd */
            while ($datos = mysqli_fetch_array($query)) {
                $id = $datos['id'];
                $nombre = $datos['nombre'];
                $apellido = $datos['apellido'];
                $cedula = $datos['cedula'];

                echo'
                <tr data-url="FQS7i2z1CoA">
                    <td></td>
                    <td>'.$id.'</td>
                    <td>'.$nombre.'</td>
                    <td>'.$apellido.'</td>
                    <td>'.$cedula.'</td>
                </tr>
                ';
            }

            ?>

            
            
            
            </tbody>
        </table>
        <div class="text-center controller">
            <ul class="pagination"></ul>
        <ul class="pager">
        <li ><a href="javascript:void(0)" class="prev">Previous</a></li>
        <li><a href="javascript:void(0)" class="next">Next</a></li>
        </ul>
        </div>

        </div>

        </div>
        
        <script src="js/script.js"></script>
        <script>
            <script type="text/javascript">
                function upperCase() {
                var x=document.getElementById("fname").value
                document.getElementById("fname").value=x.toUpperCase()
                }
            </script>
        </script>
</body>
</html>