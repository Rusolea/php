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
