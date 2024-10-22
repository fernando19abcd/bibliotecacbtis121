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
} else {
    echo "Conexión exitosa<br>"; // Mensaje de depuración
}

// Obtener los datos del formulario
$titulo = $_POST['titulo'] ?? null;
$autor = $_POST['autor'] ?? null;
$editorial = $_POST['editorial'] ?? null;
$anio_publicacion = $_POST['anio_publicacion'] ?? null;
$genero = $_POST['genero'] ?? null;
$isbn = $_POST['isbn'] ?? null;

// Verificar los datos del formulario
echo "Título: $titulo, Autor: $autor, Editorial: $editorial, Año: $anio_publicacion, Género: $genero, ISBN: $isbn<br>"; // Verificar los valores

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO libros (titulo, autor, editorial, anio_publicacion, genero, isbn) VALUES (?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
}
$stmt->bind_param("ssssss", $titulo, $autor, $editorial, $anio_publicacion, $genero, $isbn);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Nuevo libro registrado exitosamente";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la declaración y la conexión
$stmt->close();
$conn->close();
?>
