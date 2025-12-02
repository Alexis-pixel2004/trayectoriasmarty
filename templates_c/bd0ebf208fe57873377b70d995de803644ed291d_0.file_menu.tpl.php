<?php
/* Smarty version 5.6.0, created on 2025-12-02 14:42:18
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692efaca3c3532_30107663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd0ebf208fe57873377b70d995de803644ed291d' => 
    array (
      0 => 'menu.tpl',
      1 => 1764684488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692efaca3c3532_30107663 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1476383458692efaca3bf7f9_02320575', "contenido");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_1476383458692efaca3bf7f9_02320575 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<h2 class="text-center mb-4">Menú Principal</h2>

<div class="row g-4 justify-content-center">
    <!-- Inicio -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-house-door display-4 text-primary"></i>
                <h5 class="card-title mt-3">Registrar Grupo</h5>
                <a href="registrar_grupo.php" class="btn btn-outline-primary w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Alumnos -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-people display-4 text-info"></i>
                <h5 class="card-title mt-3">Alumnos</h5>
                <a href="alumnos.php" class="btn btn-outline-info w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Grupos -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-diagram-3 display-4 text-warning"></i>
                <h5 class="card-title mt-3">Grupos</h5>
                <a href="listar_grupos.php" class="btn btn-outline-warning w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Exportar -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-star display-4 text-secondary"></i>
                <h5 class="card-title mt-3">Exportar</h5>
                <a href="exportarAlumnos.php" class="btn btn-outline-secondary w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "contenido"} */
}
