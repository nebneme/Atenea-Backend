<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/edad.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>ejercicio4</title>
</head>
<body>
      <!-- imagen para regresar a la pagina principal-->
<a href="index.php">   
        <img class="home" src="imagenes/regreso.png" alt="">
    </a>
    <div class="contenedorinfo">
        <form action="" method="POST">
            <h2>Mayor o Menor de Edad</h2>
            <div class="form-group">
                <label for="exampleFormControlInput1">Ingrese su edad:</label>
                <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese el primer número">
  
            </div>
             <!-- boton para operar los numeros-->
            <button type="submit" name="ingresar" class="btn btn-outline-dark">Ingresar</button>
         </form>
         <?php 
         $edad = $ingresar =0;

         /*envio de datos post y operacion de if con else if, se da condicion de && para que no ingresen datos menores a 0*/

         if (isset($_POST['ingresar'])) {
            $edad= $_POST['edad'];
            $ingresar =$_POST['ingresar'];
         
            if ($edad >= 18) {
            echo "<h4>Es mayor de edad.</h4>";
             }
             else if (18>$edad && 0 < $edad) {
            echo "<h4>Es menor de edad.</h4>";
            }
            else
            echo "<h4>Dato no valido.</h4>";
        }

         ?>
         
    </div>
    
</body>
</html>