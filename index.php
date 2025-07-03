<?php include("conexion.php");
if (!isset($_SESSION['usuario'])) header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?= $_SESSION['usuario'] ?> 👋</h1>
        <div class="menu">
            <a href="crear.php">➕ Agregar Alumno</a>
            <a href="leer.php">📄 Ver Alumnos</a>
            <a href="logout.php">🔓 Cerrar Sesión</a>
        </div>
    </div>
</body>
</html>