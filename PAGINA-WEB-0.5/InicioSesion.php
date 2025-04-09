<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solo Respira - Fundación Fibrosis Quística</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- FontAwesome para íconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
  <!-- CSS Personalizado -->
  <link href="/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg text-light bg-light text-uppercase shadow-sm custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="/images/LOGO SOLO RESPIRA.png" alt="Logo Solo Respira" class="img-logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Nosotros.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Apadrinamiento.html">Apadrinamiento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Eventos.html">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Investigaciones.html">Investigaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contacto.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="btn ms-2" href="#">Mi Cuenta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Fin Navbar -->

  <style>
    .auth-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background: #f0f2f5;
    }
    .auth-form {
        background: white;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .form-toggle {
        cursor: pointer;
        color: #0d6efd;
        text-decoration: underline;
    }
</style>
</head>
<body>
<?php include 'auth.php'; ?>

<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                
                <!-- Mensajes de alerta -->
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                <?php endif; ?>
                
                <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success"><?= $_SESSION['success']; unset($_SESSION['success']); ?></div>
                <?php endif; ?>

                <!-- Formulario de Login -->
                <div class="auth-form" id="loginForm">
                    <h2 class="text-center mb-4">Iniciar Sesión</h2>
                    <form method="POST">
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary w-100">Entrar</button>
                    </form>
                    <p class="mt-3 text-center">¿No tienes cuenta? <span class="form-toggle" onclick="toggleForms()">Regístrate</span></p>
                </div>

                <!-- Formulario de Registro -->
                <div class="auth-form d-none" id="registerForm">
                    <h2 class="text-center mb-4">Registro</h2>
                    <form method="POST">
                        <div class="mb-3">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Confirmar Contraseña</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-success w-100">Registrarse</button>
                    </form>
                    <p class="mt-3 text-center">¿Ya tienes cuenta? <span class="form-toggle" onclick="toggleForms()">Inicia Sesión</span></p>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function toggleForms() {
        document.getElementById('loginForm').classList.toggle('d-none');
        document.getElementById('registerForm').classList.toggle('d-none');
    }
</script>


  
  <!-- Footer -->
  <footer class="footer text-light pt-4">
    <div class="container">
      <div class="row">
        <!-- Acerca de -->
        <div class="col-md-4 mb-3">
          <h5><i class="fas fa-lungs"></i> Fundación Solo Respira</h5>
          <p>Brindamos apoyo y esperanza a pacientes y familiares de Fibrosis Quística en Venezuela.</p>
        </div>
        <!-- Enlaces -->
        <div class="col-md-4 mb-3">
          <h5>Enlaces</h5>
          <ul class="list-unstyled">
            <li><a href="index.html" class="text-light">Inicio</a></li>
            <li><a href="Nosotros-LaFundacion.html" class="text-light">Nosotros</a></li>
            <li><a href="Apadrinamiento.html" class="text-light">Apadrinamiento</a></li>
            <li><a href="Eventos.html" class="text-light">Eventos</a></li>
            <li><a href="Investigaciones.html" class="text-light">Investigaciones</a></li>
            <li><a href="Contacto.html" class="text-light">Contacto</a></li>
          </ul>
        </div>
        <!-- Contacto -->
        <div class="col-md-4 mb-3">
          <h5>Contacto</h5>
          <p><i class="fas fa-map-marker-alt"></i> Maracay, Edo. Aragua, VE</p>
          <p><i class="fas fa-envelope"></i> fundacionsolorespira@gmail.com</p>
          <p><i class="fas fa-phone"></i> +58 414 460 3879</p>
        </div>
      </div>
      <div class="text-center py-3 border-top border-secondary mt-3">
        © 2025 Copyright
      </div>
    </div>
  </footer>
  <!-- Fin Footer -->
  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Personalizado -->
  <script src="js/main.js"></script>
      <!-- Script para cargar datos sin recargar la página -->
      <script>
        function cargarUsuarios() {
            fetch('php/obtener.php')
                .then(response => response.json())
                .then(data => {
                    const lista = document.getElementById('lista-usuarios');
                    lista.innerHTML = data.map(user => 
                        `<p>${user.nombre} - ${user.email}</p>`
                    ).join('');
                });
        }

        // Cargar datos al iniciar y cada 5 segundos
        cargarUsuarios();
        setInterval(cargarUsuarios, 5000);
    </script>
  <!-- Modal de confirmación -->
   <div class="modal fade" id="confirmacion" tabindex="-1" aria-labelledby="
   "aria-hidden="true"></div>
</body>
</html>