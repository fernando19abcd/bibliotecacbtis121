<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestiondelabiblioteca";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consultar los libros
$sql = "SELECT * FROM libros";
$result = $conn->query($sql);
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Lista de Libros</title>
    <link rel='stylesheet' href='estilos.css'> 
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
            margin-top: 20px; /* Espacio arriba del botón */
        }

        button:hover {
            background-color: #1d262d;
        }

        .button-container {
            display: flex;
            justify-content: center; 
        }
    </style>
</head>
<body>";

if ($result->num_rows > 0) {
    echo "<h2>Lista de Libros</h2>";
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Editorial</th>
            <th>Año de Publicación</th>
            <th>Género</th>
            <th>ISBN</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id_libro"] . "</td>
            <td>" . $row["titulo"] . "</td>
            <td>" . $row["autor"] . "</td>
            <td>" . $row["editorial"] . "</td>
            <td>" . $row["anio_publicacion"] . "</td>
            <td>" . $row["genero"] . "</td>
            <td>" . $row["isbn"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron libros.";
}
$conn->close();
echo "<div class='button-container'>
        <button onclick=\"location.href='index.php'\">Regresar a Inicio</button>
      </div>";

echo "</body></html>";
?>
