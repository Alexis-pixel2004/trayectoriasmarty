<?php
/* Smarty version 5.6.0, created on 2025-11-24 13:55:57
  from 'file:menuAlumnos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692463ed174551_26960545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a93b4d2fc76374f089d4a4f8263d55acacf8ecb0' => 
    array (
      0 => 'menuAlumnos.tpl',
      1 => 1763848363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692463ed174551_26960545 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_970329399692463ed170487_58075705', "contenido");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_970329399692463ed170487_58075705 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<div class="container mt-4">
  <h2 class="mb-4">Gestión de Alumnos</h2>

  <div class="list-group">
    <!-- Redirección al panel de registro -->
    <a href="registro_alumnos.php" class="list-group-item list-group-item-action">
      Registrar Alumno
    </a>

    <!-- Redirección al panel de visualización -->
    <a href="visualizar_alumnos.php" class="list-group-item list-group-item-action">
      Ver Alumnos por Grupo
    </a>
  </div>
</div>
<?php
}
}
/* {/block "contenido"} */
}
