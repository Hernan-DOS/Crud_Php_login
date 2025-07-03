<?php include("conexion.php");
if (!isset($_SESSION['usuario'])) header("Location: login.php");
$id = $_GET['id'];
$conn->query("DELETE FROM alumnos WHERE id = $id");
header("Location: leer.php");
?>