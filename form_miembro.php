<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar Miembro</title>
<body>
    <h2>Registrar Miembro</h2>
    <form action="insertar_miembro.php" method="post">
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
</hezd>
        Nombre: <input type="text" name="nombre" required><br>
        Dirección: <input type="text" name="direccion"><br>
        Teléfono: <input type="text" name="telefono"><br>
        Correo Electrónico: <input type="email" name="correo" required><br>
        Fecha de Registro: <input type="date" name="fecha_registro" required><br>
        <input type="submit" value="Registrar Miembro">
    </form>
    <div class="button-container">
        <button onclick="location.href='index.php'">Regresar a Inicio</button>
    </div>
</body>
</html>
