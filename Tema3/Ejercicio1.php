<html>

<head>
    <title>Ejercicio 1</title>

</head>

<body>




    <?php

    /*
Declara una variable de tipo cadena que contenga un número ( "25"). Luego,
convierte esta variable a un tipo de dato entero y realiza una suma con otro número.
Imprime el resultado antes y después de la conversión utilizando var_dump()para
ver el tipo de dato.
*/


    $numero = "25";
    $num3 = $numero + 35;
    echo "La suma es: " . var_dump($num3) . "<br>";
    $numero = (int)$numero;
    $num3 = $numero + 35;
    echo "La suma es: " . var_dump($num3) . "<br>";





    ?>
</body>


</html>