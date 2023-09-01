<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <p>Escribir un programa que mediante un formulario html un usuario pueda ingresar su nombre, apellido y edad para que sean enviados al servidor. El programa, debe recibir los datos y mostrar la información por pantalla. 
Envíe el formulario usando los métodos POST y GET. ¿Cuál es la diferencia? ¿En qué situaciones considera mejor utilizar uno u el otro?
Investigue las diferencias entre los arreglos $_POST $_GET y $_REQUEST de PHP
Genere validaciones de datos en el servidor. Ningún campo puede estar vacío. ¿Cuál es la diferencia entre realizar estas verificaciones del lado del cliente o del lado del servidor? 
</p>

<<?php
// Inicializar variables
$nombre = $apellido = $edad = "";

// Validar si los campos están vacíos y asignar valores
if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_REQUEST["nombre"]) && !empty($_REQUEST["apellido"]) && !empty($_REQUEST["edad"])) {
        $nombre = $_REQUEST["nombre"];
        $apellido = $_REQUEST["apellido"];
        $edad = $_REQUEST["edad"];
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Usuario</title>
</head>
<body>

<h1>Ingrese sus datos</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nombre: <input type="text" name="nombre"><br>
  Apellido: <input type="text" name="apellido"><br>
  Edad: <input type="number" name="edad"><br>
  <input type="submit" value="Enviar con POST">
</form>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="submit" value="Enviar con GET">
</form>

<?php
if ($nombre && $apellido && $edad) {
    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Edad: " . $edad . "<br>";
}
?>
    
</body>
</html>