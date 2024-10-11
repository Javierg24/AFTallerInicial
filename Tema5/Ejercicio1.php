<html>

<head>
<title>Ejercicio 1</title>

</head>

<body>

    <form method="post" action="">
        <label for="edad">Ingresa la edad:</label><br>
        <input type="number" id="edad" name="edad" required><br><br>
        <input type="submit" value="Introduce">
    </form>


    <?php

    /*
Escribe un script en PHP que pida al usuario ingresar su edad. Luego, utiliza una
estructura if, elseif, elsepara imprimir un mensaje diferente según la edad:
"Eres menor de edad" (< 18), "Eres adulto joven" (18-35), "Eres adulto" (36-65),
"Eres alcalde" (> 65).
*/    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];
        if ($edad < 18) {
            echo "Eres menor de edad";
        } else if ($edad >= 18 && $edad <= 35) {
            echo "Eres adulto joven";
        } else if ($edad >= 36 && $edad <= 65) {
            echo "Eres adulto";
        } else {
            echo "Eres alcalde";
        }
    }

    ?>
</body>


</html>