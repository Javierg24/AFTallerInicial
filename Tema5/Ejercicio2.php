<html>
<head>
    <style>
        #incorrecto {
            color: red;
            font-weight: bold;
        }
        #correcto {
            color: green;
            font-weight: bold;
        }
    </style>

<title>Ejercicio 2</title>
</head>

<body>
    <form method="post" action="">
        <label for="numero">Ingresa Número Positivo</label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        <input type="submit" value="Introduce">
    </form>

    <?php
    
    /*
    Escribe un script en PHP que use un bucle do-while para pedir al usuario que
    ingrese un número positivo. Si el número ingresado es negativo, el script debe
    continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
    número positivo ingresado.
    */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        do {
            if ($numero <= 0) {
                echo "<p id='incorrecto'>Introduce un número positivo</p><br>";
            } else {
                echo "<p id ='correcto'> Número positivo insertado correctamente </p><br>";
            }
        } while ($numero <= 0);
    }
    ?>
</body>
</html>
