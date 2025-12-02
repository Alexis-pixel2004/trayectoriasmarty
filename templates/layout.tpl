<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$titulo|default:"Sistema Académico"}</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/validaciones.js"></script>
</head>
<body class="bg-light">

    <!-- Cabecera -->

   <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
  <div class="container-fluid">
    
    <!-- Logo y título -->
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="index.php">
      <i class="bi bi-mortarboard fs-4"></i>
      <span>Sistema Académico</span>
    </a>

    <!-- Botón hamburguesa para móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú colapsable -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrar_grupo.php">Registrar Grupo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="alumnos.php">Alumnos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listar_grupos.php">Grupos</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="exportarAlumnos.php">Exportar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger fw-bold" href="logout.php">
            <i class="bi bi-box-arrow-right"></i> Cerrar sesión
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>




    <!-- Contenido principal -->
    <main class="container py-5">
        {block name="contenido"}{/block}
    </main>
    <!-- Footer -->
    <footer class="bg-primary text-white py-3 mt-auto shadow-sm">
        <div class="container text-center">
            <small class="opacity-75">
                &copy; 2025 Sistema Académico · Todos los derechos reservados
            </small>
        </div>
    </footer>



</body>
</html>
