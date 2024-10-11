<html>

<head>

<title>Ejercicio 1</title>
</head>

<body>




    <?php

    /*
Crea un array llamado $numerosque contiene los números del 1 al 10. Luego, usa
un bucle foreachpara recorrer el array y multiplicar cada número por 2. Almacena
los resultados en un nuevo array y muestra ambos arrays.
*/

    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $numerosPor2 = [];

    foreach ($numeros as $key => $value) {

        $numerosPor2[$key] = $value * 2;
    }

    echo implode(", ", $numeros) . "<br>";
    echo implode(", ", $numerosPor2) . "<br>";


    ?>
</body>


</html>