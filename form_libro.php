<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar Libro</title>
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            background-image: url('fondo.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Ajusta la imagen para cubrir todo el fondo */
            background-position: center; /* Centra la imagen en la página */
        }
        button {
            background-color: #213033;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #1d262d;
        }

        /* Estilos para centrar el botón */
        .button-container {
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            margin-top: 20px; /* Espacio arriba del botón */
        }
    </style>
</head>
<body>
    <h2>Registrar Libro</h2>
    <form action="insertar_libro.php" method="post">
        Título: <input type="text" name="titulo" required><br>
        Autor: <input type="text" name="autor" required><br>
        Editorial: <input type="text" name="editorial"><br>
        Año de Publicación: <input type="number" name="anio_publicacion"><br>
        Género: <input type="text" name="genero"><br>
        ISBN: <input type="text" name="isbn" required><br>
        <input type="submit" value="Registrar Libro">
    </form>
    <div class="button-container">
        <button onclick="location.href='index.php'">Regresar a Inicio</button>
    </div>
</body>
</html>
