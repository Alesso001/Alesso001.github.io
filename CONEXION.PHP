<?php
$servername = "localhost"; // Dirección del servidor de la base de datos
$username = "root"; // Usuario de la base de datos (por defecto "root")
$password = ""; // Contraseña de la base de datos (deja en blanco si es el valor por defecto)
$dbname = "NUTRICION"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
