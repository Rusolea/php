<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Básica</title>
</head>
<body>
    <h1>Calculadora Básica</h1>
    <p>Crear una calculadora básica “server side (usando php)” . </p>
        <p>Esta calculadora debe permitir generar operaciones básicas dado dos números leídos desde un formulario.</p>
        <p>Ademas, se deberá incluir una barra de navegación para </p>
        <p>Acceder a una sección número pi: esta sección debe mostrar mostrar una descripción de lo que representa este número y su valor. </p>
        <p>Investigue diferentes formas de obtener este valor en PHP.</p>

        <p>Acceder a una sección about que indique los creadores de la calculadora. </p>

        <p>Si le indicamos con un parametro un desarrollador en particular debe mostrar solo eso: ejemplo: about.php?developer=juan</p>
    <nav>
        <a href="index.php">Calculadora</a> |
        <a href="pi.php">Número Pi</a> |
        <a href="about.php">Acerca de</a>
    </nav>

    <form method="post" action="index.php">
        Número 1: <input type="number" name="num1"><br>
        Número 2: <input type="number" name="num2"><br>
        Operación:
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Indefinido (división por cero)";
                }
                break;
        }
        echo "<h2>Resultado: $resultado</h2>";
    }
    ?>
</body>
</html>
