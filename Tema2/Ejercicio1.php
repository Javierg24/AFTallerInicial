<html>

<head>

    <title>Ejercicio 1</title>

</head>

<body>
    <form method="post" action="">
        <label for="nombre">Ingresa tu nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <input type="submit" value="Introduce">
    </form>



    <?php

    /*
Ejercicio con echo y HTML Embebido
Crea un archivo PHP que imprime un formulario HTML usando la función echo. El
formulario debe contener un campo de texto para el nombre y un botón de envío.
Cuando el formulario se envía, muestra el nombre ingresado utilizando la misma
página PHP.
*/

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];

        echo "<p>Hola $nombre</p>";
    }


    ?>
</body>


</html>