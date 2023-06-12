<?php

    include 'db/conexion.php';

    $query = mysqli_query($conexion,"SELECT * FROM clientes");
    $query2 = mysqli_query($conexion,"SELECT nit FROM clientes");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&family=Roboto&display=swap" rel="stylesheet">
    <title>Clientes</title>
</head>
<body>
    <nav class="listas">
        <li><a href="index.html">Información</a></li>
        <li><a href="index2.html">Ventas por Canal</a></li>
        <li><a href="index3.html">Ventas Especificas</a></li>
        <li><a href="index4.html">Estadisticas</a></li>
        <li><a href="index5.php">Clientes</a></li>
    
    </nav>
    <section id="contenido">
        <div class="forma">
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
                <th>Id</th>
                <th>Nit</th>
                <th>Razón Social</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Telefono</th>
                <th>Encargado</th>
                <th>Comercial</th>
            </tr>
            </thead>
            <tbody>

            <?php
            /*ciclo while con arreglo de datos segun la informacion de la bd */
            while ($datos = mysqli_fetch_array($query)) {
                $nit = $datos['nit'];
                $razon_social = $datos['razon_social'];
                $dirreccion = $datos['direccion'];
                $ciudad = $datos['ciudad'];
                $telefono = $datos['telefono'];
                $encargado = $datos['encargado'];
                $comercial = $datos['comercial'];

                echo'
                <tr data-url="FQS7i2z1CoA">
                    <td></td>
                    <td>'.$nit.'</td>
                    <td>'.$razon_social.'</td>
                    <td>'.$dirreccion.'</td>
                    <td>'.$ciudad.'</td>
                    <td>'.$telefono.'</td>
                    <td>'.$encargado.'</td>
                    <td>'.$comercial.'</td>
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
        
       <div class="ingresar_clientes">
        <h1 class="texto_formulario">Ingresar nuevos clientes</h1>
        <form action="back/almacenar_datos.php" method="POST">
            <input type="number" name="nit" placeholder="Digite el nit">
            <input type="text" name="razon_social" placeholder="Digite la razón social">
            <input type="text" name="direccion" placeholder="Digite la dirrección">
            <input type="text" name="ciudad" placeholder="Digite la ciudad">
            <input type="number" name="telefono" placeholder="Digite el telefono">
            <input type="text" name="encargado" placeholder="Digite el encargado">
            <input type="text" name="comercial" placeholder="Digite el comercial">
            <input type="submit" name="almacenar" value="guardar">
        </form>
        </div>
     <div class="modificar_clientes">
        <h1 class="texto_formulario">Modificar registro de clientes</h1>

        <form action="" method="POST">
            <select name="id_consulta">
            <?php
            while ($datos2 = mysqli_fetch_array($query2)) {
                $cedula_query = $datos2['nit'];
                echo'
                <option value="'.$cedula_query.'">'.$cedula_query.'</option>
                ';
            }
            ?>
            </select>
            <input type="submit" name="buscar" value="buscar">
        </form>

        <?php
        
        if (isset($_POST['buscar'])) {
            $id_nit_query = $_POST['id_consulta'];
            echo '
            <h4>Ingrese los nuevos datos para el nit = '.$id_nit_query.'</h4>
            <form action="back/actualizar_datos.php" method="POST">

                <input type="hidden" value="'.$id_nit_query.'" name="act_nit">
                <input type="text" name="act_razon_social" placeholder="Digite la razón social">
                <input type="text" name="act_direccion" placeholder="Digite la dirrección">
                <input type="text" name="act_ciudad" placeholder="Digite la ciudad">
                <input type="number" name="act_telefono" placeholder="Digite el telefono">
                <input type="text" name="act_encargado" placeholder="Digite el encargado">
                <input type="text" name="act_comercial" placeholder="Digite el comercial">

                <input type="submit" name="act" value="Actualizar">
            </form>
            ';
        }

        ?>
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

    </section>
    <footer class="pie">
        <div class="parrafo">
        <p>© Todos los derechos reservados.</p>
        </div>
        <div class="redes">
        <a href="https://www.facebook.com/polimes/"target="_blank"><img src="logos/face.png" alt=""></a>
        <a href="https://www.instagram.com/polimescolombia/"target="_blank"><img src="logos/insta.png" alt=""></a>
        <a href="https://web.whatsapp.com/send?l=es&phone=573112860774&text=%20https://tienda.polimes.com/"target="_blank"><img src="logos/wa.png" alt=""></a>
        </div>
    </footer>
</body>
</html>