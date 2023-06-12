<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculadora.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>ejercicio1</title>
</head>
<body>
    <!-- imagen para regresar a la pagina principal-->
<a href="index.php">   
        <img  class="home" src="imagenes/regreso.png" alt="">
    </a>
   
        <div class="contenedorinfo">
            <form action="" method="POST">
                <h5>Calculadora Operaciones Basicas</h5>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Primer número:</label>
                    <input type="number" name="n1" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese el primer número">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Segundo número:</label>
                    <input type="number" name="n2" class="form-control" id="exampleFormControlInput2" placeholder="Ingrese el segundo número">
                </div>
                  <!-- formulario de ingreso de numeros y select para escoger la opcion de la operacion-->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Operación</label>
                    <select class="form-control"name="tipo" id="operacion">
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicación</option>
                    <option value="4">División</option>
                    </select>
                    
                </div>
                  <!-- boton para operar los numeros-->
                <button type="submit" name="operar" class="btn btn-outline-dark">Operar</button>
            </form>
            <?php 
            /*se declaran la variables igualadas a cero y se utiliza un valdiador de envio de datos por metodo POST*/
            $n1 = $n2 = $tipo = $resultado=0;

            if (isset($_POST['operar'])) {
                $n1= $_POST['n1'];
                $n2= $_POST['n2'];
                $tipo =$_POST['tipo'];
            }
            /*Se utiliza switch teniendo los casos de operaciones con los mismos varoles asignados al value del form del html*/ 
            switch ($tipo) {
                case '1':
                    $resultado = $n1 + $n2;
                    break;
                case '2':
                    $resultado = $n1 - $n2;
                    break;
                case '3':
                    $resultado = $n1 * $n2;
                    break;
                case '4':
                    $resultado = $n1 /  $n2;
                    break; 
            
            }
            echo "<h2>" .$resultado."</h2>";
            

            ?>
            
        </div>
    
</body>
</html>