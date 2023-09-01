<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
        }
        th {
            background-color: yellow;
        }
        .diagonal {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 6</h1>
    <p>Imprimir la siguiente tabla de multiplicar generada automáticamente en PHP. </p>
    <p>Modifique el ejercicio para que el límite de la tabla sea ingresado por un usuario.</p>

    <h1>Tabla de Multiplicación</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Límite de la tabla: <input type="number" name="limite" min="1" max="20">
  <input type="submit" value="Generar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $limite = $_POST['limite'];
    if (!empty($limite) && $limite >= 1 && $limite <= 20) {
        echo "<table>";
        echo "<tr><th></th>";
        for ($col = 0; $col <= $limite; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        for ($row = 0; $row <= $limite; $row++) {
            echo "<tr>";
            echo $row == 0 ? "<th>$row</th>" : "<th style='background-color: yellow;'>$row</th>";
            for ($col = 0; $col <= $limite; $col++) {
                $producto = $row * $col;
                if ($row == $col) {
                    echo "<td class='diagonal'>$producto</td>";
                } else {
                    echo "<td>$producto</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Por favor, ingrese un número entre 1 y 20.";
    }
}
?>
    
</body>
</html>