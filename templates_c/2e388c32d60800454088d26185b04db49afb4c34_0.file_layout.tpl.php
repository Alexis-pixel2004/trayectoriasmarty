<?php
/* Smarty version 5.6.0, created on 2025-12-02 14:42:15
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692efac7419454_72948084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e388c32d60800454088d26185b04db49afb4c34' => 
    array (
      0 => 'layout.tpl',
      1 => 1764685013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692efac7419454_72948084 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('titulo') ?? null)===null||$tmp==='' ? "Sistema Académico" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <?php echo '<script'; ?>
 src="../js/jquery-3.7.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/validaciones.js"><?php echo '</script'; ?>
>
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
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_947980120692efac7418d49_22031712', "contenido");
?>

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
<?php }
/* {block "contenido"} */
class Block_947980120692efac7418d49_22031712 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
}
}
/* {/block "contenido"} */
}
