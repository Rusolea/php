<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? null;
    $apellido = $_POST['apellido'] ?? null;
    $edad = $_POST['edad'] ?? null;

    if (!empty($nombre) && !empty($apellido) && !empty($edad)) {
        echo "Información recibida:<br>";
        echo "Nombre: $nombre<br>";
        echo "Apellido: $apellido<br>";
        echo "Edad: $edad<br>";
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>
