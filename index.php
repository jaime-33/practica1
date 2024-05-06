<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Comentarios</title>
</head>
<body>
    <h1>Comentario</h1>
    <div id="comentario"></div>

    <script>
        window.onload = function() {
            fetch('https://jsonplaceholder.typicode.com/comments/1')
            .then(response => response.json())
            .then(data => {
                mostrarComentario(data);
            })
            .catch(error => console.error('Error:', error));
        }

        function mostrarComentario(data) {
            let comentario = '<table border="1"><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Cuerpo</th></tr>';

            comentario += `<tr><td>${data.id}</td><td>${data.name}</td><td>${data.email}</td><td>${data.body}</td></tr>`;

            comentario += '</table>';

            document.getElementById('comentario').innerHTML = comentario;
        }
    </script>
</body>
</html>


