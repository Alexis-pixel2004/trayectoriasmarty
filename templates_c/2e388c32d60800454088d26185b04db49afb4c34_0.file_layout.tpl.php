<?php
/* Smarty version 5.6.0, created on 2025-11-24 14:21:31
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692469eba1f071_88777358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e388c32d60800454088d26185b04db49afb4c34' => 
    array (
      0 => 'layout.tpl',
      1 => 1763994082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692469eba1f071_88777358 (\Smarty\Template $_smarty_tpl) {
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
    <header class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm py-3">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        
        <!-- Logo y título -->
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="index.php">
            <i class="bi bi-mortarboard fs-4"></i>
            <span>Sistema Académico</span>
        </a>

    </div>
</header>


    <!-- Contenido principal -->
    <main class="container py-5">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_581063546692469eba16854_61938050', "contenido");
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
class Block_581063546692469eba16854_61938050 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
}
}
/* {/block "contenido"} */
}
