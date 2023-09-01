<!DOCTYPE html>
<html>
<head>
    <title>Formulario Avanzado con AJAX</title>
   <!--  AJAX 
Modifique el ejercicio 3 para que el programa sea llamado mediante AJAX. -->

    <script>
    function enviarFormulario() {
        var xhr = new XMLHttpRequest();
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var edad = document.getElementById("edad").value;

        var params = `nombre=${nombre}&apellido=${apellido}&edad=${edad}`;

        xhr.open("POST", "procesar.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("resultado").innerHTML = xhr.responseText;
            }
        };

        xhr.send(params);
    }
    </script>
</head>
<body>

<h1>Formulario Avanzado con AJAX</h1>

<form onsubmit="enviarFormulario(); return false;">
    Nombre: <input type="text" id="nombre"><br>
    Apellido: <input type="text" id="apellido"><br>
    Edad: <input type="number" id="edad"><br>
    <input type="submit" value="Enviar">
</form>

<div id="resultado"></div>

</body>
</html>

<!-- Puntos a considerar:
Puntos a considerar:
AJAX: El JavaScript utiliza la clase XMLHttpRequest para enviar una solicitud POST asincrónica al archivo procesar.php. Los datos del formulario se envían en el cuerpo de la solicitud.

Eventos: El atributo onsubmit del formulario llama a la función enviarFormulario() y retorna false para evitar que el formulario se envíe de la manera convencional.

Respuesta: La respuesta del servidor se muestra en un div con el ID "resultado".

Espero que esto te ayude a entender cómo trabajar con AJAX en PHP y JavaScript. -->
