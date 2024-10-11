<html>

<head>
    <title>Ejercicio 3</title>

</head>

<body>


    <form method="post" action="">
        <label for="cantidad_principal">Ingresa la cantidad principal (€):</label><br>
        <input type="text" id="cantidad_principal" name="cantidad_principal" required><br><br>
        <input type="submit" value="Calcular Interés">
    </form>


    <?php

    /*
Define una constante TASA_INTEREScon el valor 0.05. Luego, escribe un script
que acepta una cantidad principal ingresada por el usuario y calcula el interés simple
después de un año, utilizando la constante. Imprima el resultado con un formato
adecuado.
*/


    define("TASA_INTERES", 0.05);

    function calculaInteresSimple()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $cantidadPrincipal = $_POST['cantidad_principal'];
            if (is_numeric($cantidadPrincipal)) {
                $interes = $cantidadPrincipal * TASA_INTERES;
                echo "<p>Interés Simple después de un año: " . number_format($interes, 2) . " €</p>";
            } else {
                echo "<p>Error: Por favor ingresa una cantidad válida.</p>";
            }
        }
    }

    echo "Calculo del interes: " . calculaInteresSimple();







    ?>
</body>


</html>