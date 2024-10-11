<html>

<head>

    <title>Ejercicio 3</title>
</head>

<body>




    <?php

    /*
Crea una función llamada convertirTemperatura()que acepte dos
argumentos: una temperatura y una escala ( "C"o "F"). Por defecto, convierte de
Celsius a Fahrenheit. La función debe devolver la temperatura convertida. Utilice la
fórmula: (C * 9/5) + 32.
*/

    function convertirTemperatura($temperatura, $escala)
    {
        if ($escala == "C") {
            return ($temperatura * 9 / 5) + 32;
        } else if ($escala == "F") {
            return ($temperatura - 32) * 5 / 9;
        }
    }

    echo "La temperatura convertida es: " . convertirTemperatura(34, "F");


    ?>
</body>


</html>