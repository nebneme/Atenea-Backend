<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calcularedad.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>ejercicio2</title>
</head>
<body>
      <!-- imagen para regresar a la pagina principal-->
<a href="index.php">   
        <img class="home" src="imagenes/regreso.png" alt="">
    </a>
    <div class="contenedorinfo">
        <form action="" method="POST">
            <h2>Calcular Edad</h2>
            <div class="form-group">
                <!-- Se utiliza form de tipo date para mostrar el calendario y asignar la fecha de nacimiento-->
                <label for="exampleFormControlInput1">Ingrese su fecha de nacimiento:</label>
                <input type="date" name="fecha" class="form-control" id="exampleFormControlInput1">
            </div>
             <!-- boton para operar los numeros-->
            <button type="submit" name="ingresar" class="btn btn-outline-dark">Ingresar</button>
         </form>
         <?php 
         /* Se utiliza un newdatetime para pasar a valor de operacion las fechas asignadas y lograr hacer la resta
         -->diff se utiliza para restar las fechas */
         $fecha = $ingresar =$fecha_actual=0;
         

         if (isset($_POST['ingresar'])) {
            $fecha=new DateTime ($_POST['fecha']);

            $fecha_actual= date("y-m-d");
            $dato1= new DateTime($fecha_actual);

            $diff = $fecha->diff($dato1);

            $fecha_actual=$diff->y;

            echo "<h5>Tiene la edad de ".$fecha_actual." años</h5>";
         }


         ?>
         
    </div>
    
</body>
</html>