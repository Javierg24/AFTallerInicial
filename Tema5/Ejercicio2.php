<html>

<head>
    <style>
        #incorrecto {
            color: red;
            font-weight: bold;
        }

        #correcto {
            color: green;
            font-weight: bold;
        }
    </style>

    <title>Ejercicio 2</title>
</head>

<body>

    <?php

    /*
    Escribe un script en PHP que use un bucle do-while para pedir al usuario que
    ingrese un número positivo. Si el número ingresado es negativo, el script debe
    continuar pidiendo un número hasta que se ingrese uno positivo. Luego, imprime el
    número positivo ingresado.
    */

    do {
        $numero = readline("Ingrese un número positivo: ");        
        $numero = intval($numero);
        if($numero < 0){
            echo "<p id='incorrecto'> Numero ingresado incorrectamente, vuelva a introducir el numero</p>";        
        }
    } while ($numero <= 0);

    echo "<p id='correcto'> Numero ingresado correctamente </p>";


    ?>
 
</body>

</html>