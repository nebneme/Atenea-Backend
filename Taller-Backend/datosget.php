<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/datosget.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>ejercicio3</title>
</head>
<body>
      <!-- imagen para regresar a la pagina principal-->
<a href="index.php">   
        <img class="home" src="imagenes/regreso.png" alt="">
    </a>
    <div class="contenedorinfo">
        <form action="" method="GET">
            <h2>Envio de Datos GET </h2>
            <div class="form-group">
            <label for="exampleFormControlInput1">Ingrese su nombre:</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                <label for="exampleFormControlInput1">Ingrese su apellido:</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingrese su apellido">   
                <label for="exampleFormControlInput1">Ingrese su cedula:</label>
                <input type="number" name="cedula" class="form-control" id="cedula" placeholder="Ingrese su cedula">
  
            </div>
             <!-- boton para operar los numeros-->
            <button type="submit" name="ingresar" class="btn btn-outline-dark">Ingresar</button>
         </form>
         <?php 
         $edad = $ingresar = $nombre = $apellido=$cedula=0;
        /*envio de datos por el metodo get */
         if (isset($_GET['ingresar'])) {
            $nombre= $_GET['nombre'];
            $apellido= $_GET['apellido'];
            $cedula= $_GET['cedula'];
         }
         echo "<h2>Los datos son:</h2><br>";
         echo "<h2>Nombre: ".$nombre."</h2><br>";
         echo "<h2>Apellido: ".$apellido."</h2><br>";
         echo "<h2>Cedula: ".$cedula."</h2><br>";
         ?>
         
    </div>
    
</body>
</html>