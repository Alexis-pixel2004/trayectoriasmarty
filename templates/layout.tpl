<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{$titulo|default:"Sistema Académico"}</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/jquery-3.7.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/validaciones.js"></script>
</head>
<body class="bg-light">

    <!-- Cabecera -->
    <header class="navbar navbar-dark bg-primary shadow">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="bi bi-mortarboard"></i> Sistema Académico
            </a>
            <span class="text-white">
                {if isset($usuario)} Bienvenido, {$usuario} {/if}
            </span>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container py-5">
        {block name="contenido"}{/block}
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <small>&copy; 2025 Sistema Académico</small>
    </footer>


</body>
</html>
