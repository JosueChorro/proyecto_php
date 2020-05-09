<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar-ligth" style="background: #48c9b0">
        <center>
            <span class="navbar-text">
                Probando GIT :)
            </span>
        </center>
    </nav>
    <br><br>
    <div class="container">
        <h3><b>Ejercicio 1</b></h3>
        <h6>He decido crear una calculadora</h6>
        <hr>
        <br><br>

        <!-- Formulario -->
        <form action="index.php" method="post" class="fondo">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <label for="num1">Numero 1: </label>
                            <input type="text" name="num1" id="num1">
                        </div>
                        <div class="col-4">
                            <select class="custom-select custom-select-sm" name="ope">
                                <option selected>Operacion a realizar</option>
                                <option value="1">Sumar</option>
                                <option value="2">Restar</option>
                                <option value="3">Multiplicar</option>
                                <option value="4">Dividir</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="num2">Numero 2: </label>
                            <input type="text" name="num2" id="num2">
                        </div>
                    </div>
                    <br>
                    <center>
                    <input type="submit" value="Calcular" class="btn btn-success">
                    </center>
                    <hr>
                </div>
            </div>
        </form>

        <!-- Ejecucion del recibir datos-->
        <?php
            //Valida que no esten vacios los campos
            if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['ope'])) {
                //Revisa si son numericos los valores a operar de lo contrario muestra error
                if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {
                    //Asignamos valores a variables para operar
                    $n1 = $_POST['num1'];
                    $n2 = $_POST['num2'];
                    //Asignamos una variable a la operacion
                    $operacion = $_POST['ope'];
                    //Depende la operacion se ejecuta el caso apropiado
                    $res = 0;
                    switch ($operacion) {
                        case 1:
                            $res = $n1 + $n2;
                            echo '<h6>El resultado de la operacion es: '. $res .'</h6>';
                            break;
                        case 2:
                            $res = $n1 - $n2;
                            echo '<h6>El resultado de la operacion es: '. $res .'</h6>';
                            break;
                        case 3:
                            $res = $n1 * $n2;
                            echo '<h6>El resultado de la operacion es: '. $res .'</h6>';
                            break;
                        case 4:
                            $res = $n1 / $n2;
                            echo '<h6>El resultado de la operacion es: '. $res .'</h6>';
                            break;
                        default:
                            echo '<h6>Error al realizar la operacion</h6>';
                            break;
                    }
                } else {
                    echo "<h4>Error al ingresar los datos</h4>";
                }
            }
        
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>