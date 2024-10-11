<html>

<head>
    <title>Ejercicio 2</title>

</head>

<body>




    <?php

    /*
Define un array multidimensional que contiene la información de tres productos:
nombre, precio, y cantidad_en_stock. Usa un bucle foreachpara calcular el
valor total de cada producto ( precio * cantidad_en_stock) y muestra los
resultados.
*/


    $productos = [
        [
            "nombre" => "Producto A",
            "precio" => 10.50,
            "cantidad_en_stock" => 100
        ],
        [
            "nombre" => "Producto B",
            "precio" => 20.75,
            "cantidad_en_stock" => 50
        ],
        [
            "nombre" => "Producto C",
            "precio" => 15.30,
            "cantidad_en_stock" => 30
        ]
    ];



    foreach ($productos as $key => $value) {
        echo "El producto: " . $value["nombre"] . " tiene un valor total de: " . $value["precio"] * $value["cantidad_en_stock"] . "<br>";
    }




    ?>
</body>


</html>