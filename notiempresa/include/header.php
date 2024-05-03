<?php

$conexion = mysqli_connect("localhost", "root", "", "notiempresa"); //para conectar a la base de datos

session_start();

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/notiempresa/index.php">NotiEmpresa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Menú
          </button>
          <?php
          if (isset($_SESSION['nombre_user'])) {
            ?>
            <ul class="dropdown-menu dropdown-menu-dark">
              <a class="nav-link disabled">Usuario: <?php $user = $_SESSION['nombre_user']; echo $user ?></a>
              <li><a class="dropdown-item" href="">Mi Perfiil</a></li>
              <li><a class="dropdown-item" href="">Nueva Noticia</a></li>
              <li><a class="dropdown-item" href="/notiempresa/bd/logout.php">Cerrar Sessión</a></li>
            </ul>
          <?php
          }
          else{
          ?>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="/notiempresa/bd/login.php">Iniciar Sesión</a></li>
              <li><a class="dropdown-item" href="/notiempresa/bd/registrar.php">Registrarse</a></li>
            </ul>
          <?php
          }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>