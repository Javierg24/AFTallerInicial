<html>

<head>
    <title>Ejercicio 3</title>
</head>

<body>




    <?php

    /*
Crea un array de números del 1 al 5. Usa una función anónima con
array_map()para elevar cada número al cuadrado y almacenar los resultados en
un nuevo array. Imprime el array original y el nuevo array.
*/


    $array = [1, 2, 3, 4, 5];

    function elevarAlCuadrado($num)
    {

        return $num * $num;
    }

    $arrayAlCuadrado = array_map("elevarAlCuadrado", $array);

    echo implode(", ", $array) . "<br>";
    echo implode(", ", $arrayAlCuadrado);




    ?>
</body>


</html>