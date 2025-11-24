<?php
/* Smarty version 5.6.0, created on 2025-11-24 13:55:56
  from 'file:menu.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692463ec1275e9_72161271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd0ebf208fe57873377b70d995de803644ed291d' => 
    array (
      0 => 'menu.tpl',
      1 => 1763848212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692463ec1275e9_72161271 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1019429262692463ec1226f5_45247450', "contenido");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_1019429262692463ec1226f5_45247450 extends \Smarty\Runtime\Block
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

    <!-- Materias -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-book display-4 text-danger"></i>
                <h5 class="card-title mt-3">Materias</h5>
                <a href="materias.php" class="btn btn-outline-danger w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Actividades -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-star display-4 text-secondary"></i>
                <h5 class="card-title mt-3">Actividades</h5>
                <a href="actividades.php" class="btn btn-outline-secondary w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "contenido"} */
}
