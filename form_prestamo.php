<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrar Préstamo</title>
<body>
    <h2>Registrar Préstamo</h2>
    <form action="insertar_prestamo.php" method="post">
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

        ID del Libro: <input type="number" name="id_libro" required><br>
        ID del Miembro: <input type="number" name="id_miembro" required><br>
        Fecha de Préstamo: <input type="date" name="fecha_prestamo" required><br>
        Fecha de Devolución: <input type="date" name="fecha_devolucion"><br>
        Estado: 
        <select name="estado">
            <option value="activo">Activo</option>
            <option value="devuelto">Devuelto</option>
        </select><br>
        <input type="submit" value="Registrar Préstamo">
    </form>
    <div class="button-container">
        <button onclick="location.href='index.php'">Regresar a Inicio</button>
    </div>
</body>
</html>
