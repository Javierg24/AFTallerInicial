<html>

<head>
    <title>Ejercicio 1</title>

</head>

<body>




    <?php

    /*
1. Ejercicio con Operadores de Asignación y Condicionales
Declara una variable con un valor inicial de 100. Usa operadores de asignación (
+=, -=, etc.) para modificar su valor en diferentes etapas y luego usa una
condicional ifpara determinar si el valor final es mayor o menor que 100.
*/


    $numero = 100;



    $numero += 20;

    if ($numero > 100) {
        echo "El valor es mayor que 100 <br>";
    } else {
        echo "El valor es menor que 100 <br> ";
    }

    $numero -= 10;

    if ($numero > 100) {
        echo "El valor es mayor que 100 <br>";
    } else {
        echo "El valor es menor que 100 <br>";
    }



    ?>
</body>


</html>