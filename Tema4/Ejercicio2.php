<html>

<head>

<title>Ejercicio 2</title>
</head>

<body>




    <?php

    /*
Declara tres variables: $a, $by $c, con valores numéricos diferentes. Utilice
operadores de comparación y lógicos para verificar si $aes mayor que $b y si $ces
menor que $a. Imprima un mensaje que indique si ambas condiciones son
verdaderas o si alguna es falsa.
*/


    $a = 10;
    $b = 7;
    $c = 12;

    if ($a > $b && $c < $a) {
        echo "Ambos son verdaderas";
    } else if(!($a > $b) ){
        echo "a es menor que b";
    } else {
        echo "c es mayor que a";
    }
    
    ?>
</body>


</html>