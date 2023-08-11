<?php
session_start();

// Verificar si el usuario ha iniciado sesión antes de mostrar el contenido de esta página
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Bienvenido al área de usuarios</h1>
    <p>¡Hola, usuario! Has iniciado sesión correctamente.</p>
    <!-- Aquí puedes mostrar el contenido de la página después de que el usuario ha iniciado sesión -->
</body>
</html>
