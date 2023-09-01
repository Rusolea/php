<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <p>Modifique el ejercicio 2 para que el usuario mediante links html pueda ir modificando el tamaño de la lista generada. Por ejemplo:</p>
    <?php
// Inicializar el arreglo
$arreglo = array("item1", "item2", "item3", "item4", "item5", "item6", "item7", "item8");

// Obtener el número de elementos a mostrar desde el parámetro GET 'limit'
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : count($arreglo);

// Validar y mostrar elementos
if ($limit > 0 && $limit <= count($arreglo)) {
    echo "<h2>Mostrando los primeros $limit elementos:</h2>";
    echo "<ul>";
    for ($i = 0; $i < $limit; $i++) {
        echo "<li>" . $arreglo[$i] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Número inválido.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista con Opciones</title>
</head>
<body>

<h1>Opciones de Visualización</h1>

<!-- Enlaces para controlar el número de elementos a mostrar -->
<a href="?limit=5">Ver los primeros 5</a><br>
<a href="?limit=3">Ver los primeros 3</a><br>
<a href="?limit=8">Ver todos</a>

</body>
</html>

</body>
</html>