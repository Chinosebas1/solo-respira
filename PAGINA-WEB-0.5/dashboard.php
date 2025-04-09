<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Bienvenido, <?= htmlspecialchars($_SESSION['user']['name']) ?></h2>
        <p>Email: <?= htmlspecialchars($_SESSION['user']['email']) ?></p>
        <a href="?logout" class="btn btn-danger">Cerrar Sesión</a>
    </div>
</body>
</html>