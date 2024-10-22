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

// Consultar los préstamos
$sql = "SELECT * FROM prestamos";
$result = $conn->query($sql);
echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Lista de Préstamos</title>
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
    echo "<h2>Lista de Préstamos</h2>";
    echo "<table border='1'>
        <tr>
            <th>ID Préstamo</th>
            <th>ID Libro</th>
            <th>ID Miembro</th>
            <th>Fecha de Préstamo</th>
            <th>Fecha de Devolución</th>
            <th>Estado</th>
        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id_prestamo"] . "</td>
            <td>" . $row["id_libro"] . "</td>
            <td>" . $row["id_miembro"] . "</td>
            <td>" . $row["fecha_prestamo"] . "</td>
            <td>" . $row["fecha_devolucion"] . "</td>
            <td>" . $row["estado"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron préstamos.";
}
$conn->close();
echo "<div class='button-container'>
        <button onclick=\"location.href='index.php'\">Regresar a Inicio</button>
      </div>";

echo "</body></html>";
?>
