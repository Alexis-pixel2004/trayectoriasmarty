<?php
/* Smarty version 5.6.0, created on 2025-11-22 02:55:03
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_69212607efceb1_36809636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e388c32d60800454088d26185b04db49afb4c34' => 
    array (
      0 => 'layout.tpl',
      1 => 1763480630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69212607efceb1_36809636 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('titulo') ?? null)===null||$tmp==='' ? "Sistema Académico" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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
    <header class="navbar navbar-dark bg-primary shadow">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="bi bi-mortarboard"></i> Sistema Académico
            </a>
            <span class="text-white">
                <?php if ((true && ($_smarty_tpl->hasVariable('usuario') && null !== ($_smarty_tpl->getValue('usuario') ?? null)))) {?> Bienvenido, <?php echo $_smarty_tpl->getValue('usuario');?>
 <?php }?>
            </span>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="container py-5">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_175419709669212607efc863_87946343', "contenido");
?>

    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center py-3 mt-auto">
        <small>&copy; 2025 Sistema Académico</small>
    </footer>


</body>
</html>
<?php }
/* {block "contenido"} */
class Block_175419709669212607efc863_87946343 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
}
}
/* {/block "contenido"} */
}
