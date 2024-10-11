<html>

<head>

    <title>Ejercicio 3</title>
</head>

<body>




    <?php

    /*
Defina una variable llamada $calificacionque contenga un valor numérico.
Utilice un operador ternario anidado para determinar si la calificación es
"Sobresaliente" (90-100), "Buena" (70-89), o "Necesita mejorar" (menor a 70).
Imprime el resultado.
*/

    $calificacion = 70;

    $resultado = ($calificacion >= 90) ? "Sobresaliente" : (($calificacion >= 70 && $calificacion <= 89) ? "Buena" : "Necesita mejorar");
    echo "Resultado: " . $resultado;



    ?>
</body>


</html>