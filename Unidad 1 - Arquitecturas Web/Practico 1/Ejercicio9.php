<!DOCTYPE html>
<html>
<head>
    <title>Formulario Avanzado</title>
</head>
<body>

<h1>Formulario Avanzado</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Edad: <input type="number" name="edad"><br>
    
    <!-- Elementos avanzados -->
    Género:
    <input type="radio" name="genero" value="Masculino"> Masculino
    <input type="radio" name="genero" value="Femenino"> Femenino<br>
    
    País:
    <select name="pais">
        <option value="Argentina">Argentina</option>
        <option value="Brasil">Brasil</option>
        <option value="Chile">Chile</option>
    </select><br>
    
    Intereses:
    <input type="checkbox" name="intereses[]" value="Deporte"> Deporte
    <input type="checkbox" name="intereses[]" value="Música"> Música
    <input type="checkbox" name="intereses[]" value="Tecnología"> Tecnología<br>
    
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'] ?? null;
    $apellido = $_POST['apellido'] ?? null;
    $edad = $_POST['edad'] ?? null;
    $genero = $_POST['genero'] ?? null;
    $pais = $_POST['pais'] ?? null;
    $intereses = $_POST['intereses'] ?? [];

    // Validación del lado del servidor
    if (!empty($nombre) && !empty($apellido) && !empty($edad) && !empty($genero) && !empty($pais)) {
        echo "<h2>Información recibida:</h2>";
        echo "Nombre: $nombre<br>";
        echo "Apellido: $apellido<br>";
        echo "Edad: $edad<br>";
        echo "Género: $genero<br>";
        echo "País: $pais<br>";
        echo "Intereses: " . implode(", ", $intereses) . "<br>";
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>

</body>
</html>
