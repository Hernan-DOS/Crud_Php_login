<?php
include("conexion.php");
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = hash('sha256', $_POST['password']);
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows == 1) {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
    } else {
        $mensaje = "Usuario o contraseña incorrectos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <div class="container">
        <h2>Login de Usuario</h2>
        <?php if ($mensaje): ?>
            <p style="color:red;"><?= $mensaje ?></p>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="usuario" placeholder="Usuario" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>