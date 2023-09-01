<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <p>Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. Identifique las diferencias entre arreglos asociativos e indexados</p>
    
    <?php
        $arreglo = array("uno", "dos", "tres", "cuatro", "cinco");
        $arregloAsociativo = array("nombre" => "Juan", "apellido" => "Perez", "edad" => 30, "telefono" => "1234567890");
        echo "<h2>Arreglo indexado</h2>";
        echo "<ul>";
        foreach ($arreglo as $valor) {
            echo "<li>$valor</li>";
        }
        echo "</ul>";
        echo "<h2>Arreglo asociativo</h2>";
        echo "<ul>";
        foreach ($arregloAsociativo as $clave => $valor) {
            echo "<li>$clave: $valor</li>";
        }
        echo "</ul>";


    ?>

</body>
</html>