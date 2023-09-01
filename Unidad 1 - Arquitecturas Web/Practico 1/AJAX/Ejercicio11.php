<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 con AJAX</title>
    <script>
    function cargarLista(limit) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "generar_lista.php?limit=" + limit, true);

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("lista").innerHTML = xhr.responseText;
            }
        };

        xhr.send();
    }
    </script>
</head>
<body>

<h1>Ejercicio 4 con AJAX</h1>
<p>Modifique el ejercicio 2 para que el usuario mediante links html pueda ir modificando el tamaño de la lista generada. Por ejemplo:</p>

<div id="lista"></div>

<h1>Opciones de Visualización</h1>

<!-- Enlaces para controlar el número de elementos a mostrar -->
<a href="javascript:cargarLista(5)">Ver los primeros 5</a><br>
<a href="javascript:cargarLista(3)">Ver los primeros 3</a><br>
<a href="javascript:cargarLista(8)">Ver todos</a>

<!-- Cargar toda la lista al inicio -->
<script>
cargarLista(8);
</script>

</body>
</html>

<!-- Puntos a considerar:
He creado una función JavaScript cargarLista que toma un número límite como argumento. Esta función utiliza XMLHttpRequest para hacer una solicitud GET asincrónica a generar_lista.php, pasando el límite como parámetro.

En la página HTML, los enlaces ahora ejecutan la función cargarLista con diferentes límites, en lugar de recargar toda la página.

Utilizo un <div> con el ID "lista" para mostrar la lista. Este div se actualiza con la respuesta de la solicitud AJAX.

Finalmente, un pequeño script al final del archivo HTML carga toda la lista cuando se carga la página por primera vez.

Con estos cambios, ahora puedes cambiar el tamaño de la lista sin recargar la página, gracias a AJAX. -->