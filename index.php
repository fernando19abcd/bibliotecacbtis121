<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gestión de Biblioteca - CBTis 121</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Establece la fuente del texto en Arial o, si no está disponible, en sans-serif */
            background-image: url('fondo.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Ajusta la imagen para cubrir todo el fondo */
            background-position: center; /* Centra la imagen en la página */
            margin: 0; /* Elimina el margen predeterminado del cuerpo */
            padding: 0; /* Elimina el relleno predeterminado del cuerpo */
            color: #333; /* Establece el color del texto en un gris oscuro */
        }

        header {
            background-color: rgba(33, 47, 61, 0.8); /* Color de fondo con transparencia */
            color: white; /* Color del texto en blanco */
            text-align: center; /* Centra el texto dentro del encabezado */
            padding: 1em; /* Agrega un espacio interno de 1 em alrededor del contenido del encabezado */
        }

        nav {
            display: flex; /* Utiliza flexbox para organizar los elementos */
            flex-direction: column; /* Disposición en columna */
            align-items: center; /* Centra los elementos horizontalmente */
            margin: 20px; /* Agrega un margen de 20px alrededor del navegador */
        }

        .button-row {
            display: flex; /* Utiliza flexbox para la fila de botones */
            justify-content: center; /* Centra los botones en la fila */
            margin: 10px 0; /* Agrega un margen superior e inferior de 10px */
        }

        nav a {
            margin: 10px; /* Agrega un margen de 10px alrededor de cada enlace */
            text-decoration: none; /* Elimina el subrayado del texto del enlace */
            color: white; /* Color del texto del enlace */
            font-size: 28px; /* Aumenta el tamaño de fuente de los enlaces a 28px */
            padding: 15px 30px; /* Aumenta el espacio interno a 15px vertical y 30px horizontal */
            border: 2px solid #212f3d; /* Agrega un borde de 2px de color #212f3d alrededor del enlace */
            border-radius: 5px; /* Redondea las esquinas del borde del enlace */
            font-weight: bold; /* Establece el texto en negrita */
            background-color: rgba(33, 47, 61, 0.8); /* Color de fondo gris para los botones */
            transition: background-color 0.3s; /* Efecto de transición para el color de fondo */
        }

        nav a:hover {
            background-color: rgba(33, 47, 61, 1); /* Cambia el color de fondo al pasar el mouse */
        }

        footer {
            text-align: center; /* Centra el contenido del pie de página */
            padding: 10px; /* Agrega un espacio interno de 10px alrededor del contenido del pie de página */
            background-color: rgba(33, 47, 61, 0.8); /* Color de fondo con transparencia */
            color: white; /* Color del texto en blanco */
            position: fixed; /* Mantiene el pie de página en la parte inferior de la página */
            width: 100%; /* Hace que el pie de página ocupe el 100% del ancho de la ventana */
            bottom: 0; /* Alinea el footer en la parte inferior de la ventana */
        }
    </style>
</head>
<body>
    <header>
        <h1>Sistema de Gestión de Biblioteca</h1>
        <p>Bienvenido al Sistema de Gestión de Biblioteca del CBTis 121</p>
    </header>
    <nav>
        <div class="button-row">
            <a href="form_libro.php">Registrar Libro</a>
            <a href="form_miembro.php">Registrar Miembro</a>
            <a href="form_prestamo.php">Registrar Préstamo</a>
        </div>
        <div class="button-row">
            <a href="ver_libros.php">Ver Libros</a>
            <a href="ver_miembros.php">Ver Miembros</a>
            <a href="ver_prestamos.php">Ver Préstamos</a>
        </div>
        <div class="button-row">
            <a href="salir.php">Salir</a>
        </div>
    </nav>
    <footer>
        <p>CBTis 121 - Sistema de Gestión de Biblioteca © 2024</p>
    </footer>
</body>
</html>
