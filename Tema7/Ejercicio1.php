<html>

<head>
    <title>Ejercicio 1</title>

</head>

<body>




    <?php

    /*
Define una función llamada incrementarPorValor()que acepte una variable por
referencia y la incremente en 10. Llama a la función pasando una variable y muestra
su valor antes y después de la llamada para ver el cambio.
*/

    $variable = 0;

    function incrementarPorValor(&$variable)
    {
        $variable += 10;
    }

    echo "Valor: " . $variable . "<br>";

    incrementarPorValor($variable);

    echo "Valor: " . $variable;


    ?>
</body>


</html>