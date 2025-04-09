<?php
session_start();
require 'conexion.php';

// Registrar usuario
if(isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validaciones
    if($password !== $confirm_password) {
        $_SESSION['error'] = "Las contraseñas no coinciden";
        header("Location: InicioSesion.php");
        exit();
    }
    
    // Verificar si el email existe
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    if($stmt->rowCount() > 0) {
        $_SESSION['error'] = "El email ya está registrado";
        header("Location: InicioSesion.php");
        exit();
    }
    
    // Hash de contraseña
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    // Insertar usuario
    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $hash]);
    
    $_SESSION['success'] = "Registro exitoso! Por favor inicia sesión";
    header("Location: InicioSesion.php");
    exit();
}

// Iniciar sesión
if(isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ];
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Credenciales incorrectas";
        header("Location: InicioSesion.php");
        exit();
    }
}

// Cerrar sesión
if(isset($_GET['logout'])) {
    session_destroy();
    header("Location: InicioSesion.php");
    exit();
}
?>