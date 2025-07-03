<?php
session_start();
$host = "localhost";
$usuario = "admin";
$contrasena = "1234";
$base_datos = "instituto";
$conn = new mysqli($host, $usuario, $contrasena, $base_datos);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
