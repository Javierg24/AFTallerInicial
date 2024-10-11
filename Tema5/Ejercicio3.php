<html>

<head>
<title>Ejercicio 3</title>

</head>

<body>

    <form method="post" action="">
        <label for="numero">Ingresa Número Positivo</label><br>
        <select id="operacion" name="operacion" required>
            <option value="Sumar">Sumar</option>
            <option value="Restar">Restar</option>
            <option value="Multiplicar">Multiplicar</option>
            <option value="Dividir">Dividir</option>
        </select><br><br>
        <input type="number" id="numero1" name="numero1" required><br><br>
        <input type="number" id="numero2" name="numero2" required><br><br>
        <input type="submit" value="Introduce">
    </form>


    <?php

    /*
Crea un menú de opciones con switch, donde el usuario pueda elegir entre
"Sumar", "Restar", "Multiplicar" y "Dividir". Solicita dos números al usuario y realiza la
operación seleccionada. Si el usuario selecciona una opción inválida, se muestra un
mensaje de error.
*/
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $opcion = $_POST["operacion"];
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        switch ($opcion) {
            case "Sumar":
                echo "<p> Suma: " . ($numero1 + $numero2) . "</p>";
                break;
            case "Restar":
                echo "<p> Resta: " . ($numero1 - $numero2) . "</p>";
                break;
            case "Multiplicar":
                echo "<p> Multiplicacion: " . ($numero1 * $numero2) . "</p>";
                break;
            case "Dividir":
                echo "<p> Division: " . ($numero1 / $numero2) . "</p>";
                break;
        }
    }

    ?>
</body>


</html>