<html>

<head>

    <title>Ejercicio 3</title>
</head>

<body>




    <?php

    /*
Define dos arrays: $array1 con los valores "rojo", "verde", "azul", y
$array2con "verde", "amarillo", "azul". Usamos array_diff()para
determinar qué colores están en $array1pero no en $array2. Imprime el
resultado.
*/

    $array1 = ["rojo", "verde", "azul"];
    $array2 = ["verde", "amarillo", "azul"];

    $array3 = array_diff($array1, $array2);

    echo implode(", ", $array3);




    ?>
</body>


</html>