<!DOCTYPE html>
<html>
<head>
    <title>Acerca de</title>
</head>
<body>
    <h1>Acerca de</h1>
    <nav>
        <a href="index.php">Calculadora</a> |
        <a href="pi.php">Número Pi</a> |
        <a href="about.php">Acerca de</a>
    </nav>

    <?php
    $developers = ["Juan", "Maria", "Carlos"];
    
    if (isset($_GET['developer'])) {
        $dev = $_GET['developer'];
        if (in_array($dev, $developers)) {
            echo "<p>Desarrollador: $dev</p>";
        } else {
            echo "<p>Desarrollador no encontrado.</p>";
        }
    } else {
        echo "<p>Desarrolladores: " . implode(", ", $developers) . "</p>";
    }
    ?>
</body>
</html>
