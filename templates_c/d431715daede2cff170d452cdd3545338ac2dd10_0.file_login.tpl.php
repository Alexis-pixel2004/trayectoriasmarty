<?php
/* Smarty version 5.6.0, created on 2025-11-22 02:55:03
  from 'file:login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_69212607c0b759_15064561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd431715daede2cff170d452cdd3545338ac2dd10' => 
    array (
      0 => 'login.tpl',
      1 => 1763400741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69212607c0b759_15064561 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_161607866569212607ab3832_25893524', "contenido");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_161607866569212607ab3832_25893524 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<div class="d-flex justify-content-center align-items-center" style="min-height:70vh;">
    <form method="post" action="../controladores/login.php" class="card p-4 shadow-sm" style="max-width:400px; width:100%;">

        <h4 class="mb-3 text-center">Iniciar Sesión</h4>

        <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('error');?>
</div>
        <?php }?>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="usuario" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <a href="../controladores/registro_docente.php" class="btn btn-outline-secondary">Registrar nuevo docente</a>
        </div>
    </form>
</div>
<?php
}
}
/* {/block "contenido"} */
}
