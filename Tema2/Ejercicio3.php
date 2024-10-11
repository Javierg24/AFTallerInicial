<html>

<head>
    <title>Ejercicio 3</title>

</head>

<body>




    <?php

    /*
Declara una llamada constante GRAVITYcon el valor 9.8. Luego, crea una función
que acepta el nombre de un planeta y, si el planeta es "Tierra", multiplica un valor de
masa ingresado por la gravedad (utilizando la constante). Usa variables para
almacenar el resultado e imprimir un mensaje con la fuerza de gravedad aplicada.

*/

    define("GRAVITY", 9.8);

    function fuerzaGravedad($planeta, $masa)
    {
        if ($planeta === "Tierra") {
            return $masa * GRAVITY;
        } else {
            return "El planeta no es Tierra";
        }
    }

    $fuerza = fuerzaGravedad("Tierra", 50);
    echo "La fuerza aplicada de la gravedad es: " . $fuerza;





    ?>
</body>


</html>