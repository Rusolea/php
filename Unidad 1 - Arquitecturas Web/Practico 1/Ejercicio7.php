<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <p>Una persona desea invertir dinero en un banco, el cual le otorga un % de interés mensual. </p>
    <p>Escribir un programa para simular la inversión que imprima cuál será la cantidad de dinero que esta persona tendrá mes a mes durante un año.</p>
    <p> Genere una tabla HTML para mostrar el resultado.</p>

    <h1>Simulación de Inversión</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Cantidad inicial: <input type="number" name="inicial" step="0.01"><br>
  Tasa de interés mensual (%): <input type="number" name="tasa" step="0.01"><br>
  <input type="submit" value="Simular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inicial = $_POST['inicial'];
    $tasa = $_POST['tasa'];
    
    if (!empty($inicial) && !empty($tasa)) {
        echo "<h2>Resultado de la inversión:</h2>";
        echo "<table>";
        echo "<tr><th>Mes</th><th>Saldo</th></tr>";
        
        $saldo = $inicial;
        for ($mes = 1; $mes <= 12; $mes++) {
            echo "<tr><td>$mes</td><td>" . number_format($saldo, 2) . "</td></tr>";
            $saldo += $saldo * ($tasa / 100);
        }
        
        echo "</table>";
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
    
</body>
</html>