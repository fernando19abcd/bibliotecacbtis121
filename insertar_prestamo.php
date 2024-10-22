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

// Obtener los datos del formulario
$id_libro = $_POST['id_libro'];
$id_miembro = $_POST['id_miembro'];
$fecha_prestamo = $_POST['fecha_prestamo'];
$fecha_devolucion = $_POST['fecha_devolucion'];
$estado = $_POST['estado'];

// Insertar en la tabla prestamos
$sql = "INSERT INTO prestamos (id_libro, id_miembro, fecha_prestamo, fecha_devolucion, estado)
VALUES ('$id_libro', '$id_miembro', '$fecha_prestamo', '$fecha_devolucion', '$estado')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo préstamo registrado exitosamente.";
} else {
    echo "Error: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
