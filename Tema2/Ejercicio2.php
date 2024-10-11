<html>

<head>
    <title>Ejercicio 2</title>

</head>

<body>




    <?php

    /*
Escribe un script en PHP que contenga una función de llamada
calcularAreaRectangulo($ancho, $alto). Documente cada parte del guión
con comentarios detallados, incluyendo la explicación de la función, los parámetros y
cómo se realiza la operación. Usa comentarios multilínea para explicar el propósito
general del script y comentarios de una sola línea para detallar las operaciones.

*/

    /**
     * Calcula el area de un rectangulo
     *
     * @param int $ancho     El ancho del rectangulo
     * @param int $alto      El alto del rectangulo
     *
     * @return int           El area del rectangulo
     */
    function calcularAreaRectangulo($ancho, $alto)
    {
        if (is_numeric($alto) && is_numeric($alto)) { //Comprueba que los valores sean numéricos
            return $ancho * $alto; //Devuelve el area del rectangulo
        } else {
            return "Error: Ambos valores no son numeros"; //Muestra un error
        }
    }

    echo  "El area del rectangulo es: " . calcularAreaRectangulo(5.3, 4) . "<br>"; //Resultado de calcular el área
    echo calcularAreaRectangulo("cinco", "tres");  //Prueba de que salta el error




    ?>
</body>


</html>