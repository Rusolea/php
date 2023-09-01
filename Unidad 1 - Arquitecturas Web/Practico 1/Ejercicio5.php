<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <p>Construir un programa que calcule el índice de masa corporal de una persona </p>

<h2>Bajo peso</h2>
<p>18,50</p>
<p>Normal</p>
<p>18,5 - 24,99</p>

<h2>Sobrepeso</h2>
<p>≥25,00</p>
<p>Normal</p>
<p>18,5 - 24,99</p>
<h2>Obesidad</h2>
<p>≥30,00</p>
<h2>Nota: </h2>

<p>El IMC por sí solo no es una herramienta de diagnóstico. Si tenés dudas, consultá a un médico.</p>
<p>(IMC = peso [kg] / altura [m]2) e informe el estado en el que se encuentra esa persona en función del valor de IMC.</p>


<?php
// Inicializar variables
$peso = $altura = $imc = "";
$categoria = "Ingrese peso y altura";

// Verificar si se han ingresado datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["peso"]) && !empty($_POST["altura"])) {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        
        // Calcular IMC
        $imc = $peso / ($altura * $altura);

        // Determinar la categoría
        if ($imc < 18.5) {
            $categoria = "Bajo peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $categoria = "Normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $categoria = "Sobrepeso";
        } else {
            $categoria = "Obesidad";
        }
    } else {
        $categoria = "Todos los campos son obligatorios";
    }
}
?>


<h1>Calculadora de Índice de Masa Corporal (IMC)</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Peso (en kg): <input type="number" name="peso"><br>
  Altura (en m): <input type="number" step="0.01" name="altura"><br>
  <input type="submit" value="Calcular">
</form>

<?php
if ($imc) {
    echo "<h2>Resultado:</h2>";
    echo "IMC: " . number_format($imc, 2) . "<br>";
    echo "Categoría: " . $categoria . "<br>";
}
?>

<p>Nota: El IMC por sí solo no es una herramienta de diagnóstico. Si tienes dudas, consulta a un médico.</p>



    
</body>
</html>