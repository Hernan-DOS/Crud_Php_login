<?php include("conexion.php");
if (!isset($_SESSION['usuario'])) header("Location: login.php");
$resultado = $conn->query("SELECT * FROM alumnos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alumnos</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h2>Alumnos Registrados</h2>
        <table>
            <tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th><th>Acciones</th></tr>
            <?php while ($row = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td><?= $row['apellido'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td>
                        <a href="actualizar.php?id=<?= $row['id'] ?>">Editar</a> |
                        <a href="eliminar.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
        <a href="index.php">← Volver</a>
    </div>
</body>
</html>