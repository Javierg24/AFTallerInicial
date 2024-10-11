<html>

<head>

    <title>Ejercicio 2</title>
</head>

<body>




    <?php

    /*

Crea un array multidimensional llamado $alumnosque contiene información de al
menos tres estudiantes. Cada estudiante debe tener un nombre, una edad y una
lista de materias con sus respectivas calificaciones. Registre la matriz para mostrar
el nombre de cada alumno y la calificación promedio de sus materias.

*/

    function calcularMedia($notas)
    {
        $totalNotas = 0;
        $numeroAsignaturas = 0;
        foreach ($notas as $asignatura => $nota) {
            $totalNotas += $nota;
            $numeroAsignaturas++;
        }

        if ($numeroAsignaturas > 0) {
            return $totalNotas / $numeroAsignaturas;
        } else {
            return 0; // Si no hay asignaturas
        }
    }

    $alumnos = [["Juan", 21, ["Matemáticas" => 8, "Física" => 9, "Química" => 7]], ["Pepe", 19, ["Matemáticas" => 6, "Física" => 5, "Química" => 10]], ["Luisa", 20, ["Matemáticas" => 8, "Física" => 10, "Química" => 10]]];

    foreach ($alumnos as $alumno) {
        $nombre = $alumno[0];
        $edad = $alumno[1];
        $notas = $alumno[2];

        $mediaAsignaturas = calcularMedia($notas);

        echo "Nombre: " . $nombre . ", Media Total:  " . $mediaAsignaturas . "<br>";
    }


    ?>
</body>


</html>