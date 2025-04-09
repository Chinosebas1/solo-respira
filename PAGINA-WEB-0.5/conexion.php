<?php
$servidor = "localhost:3306";  // Servidor de la BD (generalmente "localhost")
$usuario = "root";        // Usuario de MySQL (cambia si es necesario)
$contrasena = "18092003";         // Contraseña (vacía en XAMPP por defecto)
$bd = "fundacion";           // Nombre de la base de datos


// Crear conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8mb4", $usuario, $contrasena, $options);
    // Configuración adicional si es necesario
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (\PDOException $e) {
    // Manejo de errores más robusto
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
    // O puedes redirigir a una página de error
    // header("Location: error.php?message=".urlencode($e->getMessage()));
    // exit();
}
?>