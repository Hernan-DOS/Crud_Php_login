<?php include("conexion.php");
if (!isset($_SESSION['usuario'])) header("Location: login.php");
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $conn->query("UPDATE alumnos SET nombre='$nombre', apellido='$apellido', email='$email' WHERE id=$id");
    header("Location: leer.php");
}
$alumno = $conn->query("SELECT * FROM alumnos WHERE id = $id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h2>Editar Alumno</h2>
        <form method="post">
            <input type="text" name="nombre" value="<?= $alumno['nombre'] ?>" required><br>
            <input type="text" name="apellido" value="<?= $alumno['apellido'] ?>" required><br>
            <input type="email" name="email" value="<?= $alumno['email'] ?>" required><br>
            <button type="submit">Actualizar</button>
        </form>
        <a href="index.php">← Volver</a>
    </div>
</body>
</html>