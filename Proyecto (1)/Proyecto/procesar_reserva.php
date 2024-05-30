<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$fecha = $_POST['fecha'];
$servicio = $_POST['servicio'];
$horario = $_POST['horario'];
$mensaje = $_POST['mensaje'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO reservas (nombre, correo, fecha, servicio, horario, mensaje) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $correo, $fecha, $servicio, $horario, $mensaje);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Reserva realizada con éxito";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar conexión
$stmt->close();
$conn->close();
?>