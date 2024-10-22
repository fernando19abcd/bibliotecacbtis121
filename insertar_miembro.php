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
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$fecha_registro = $_POST['fecha_registro'];

// Insertar en la tabla miembros
$sql = "INSERT INTO miembros (nombre, direccion, telefono, correo, fecha_registro)
VALUES ('$nombre', '$direccion', '$telefono', '$correo', '$fecha_registro')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo miembro registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
