<?php
/* Smarty version 5.6.0, created on 2025-11-24 14:07:55
  from 'file:registrarGrupo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692466bbf2d059_08382642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09ab41b03dbe87799b2636e8329506c3b3988429' => 
    array (
      0 => 'registrarGrupo.tpl',
      1 => 1763479794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692466bbf2d059_08382642 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1946311693692466bbf19429_38837559', "contenido");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_1946311693692466bbf19429_38837559 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<form id="form_grupo" method="post" class="card p-3 mb-3 ">
  <div class="row g-2">
    <div class="col-md-4">
      <label class="form-label">Nombre del grupo</label>
      <input type="text" id="NombreGrupo" name="NombreGrupo" class="form-control">
    </div>

<select id="IdGrado" name="IdGrado" class="form-select">
  <option value="">Selecciona un grado</option>
  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('grados'), 'g');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach0DoElse = false;
?>
    <option value="<?php echo $_smarty_tpl->getValue('g')['IdGrado'];?>
"><?php echo $_smarty_tpl->getValue('g')['NombreGrado'];?>
 - <?php echo $_smarty_tpl->getValue('g')['Nivel'];?>
</option>
  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</select>


    <div class="col-md-3">
      <label class="form-label">Ciclo escolar</label>
      <input type="text" id="CicloEscolar" name="CicloEscolar" class="form-control" placeholder="2025-2026">
    </div>

    <div class="col-md-2 d-grid">
      <label class="form-label">&nbsp;</label>
      <button type="submit" class="btn btn-success">Agregar</button>
    </div>
  </div>
</form>

<?php
}
}
/* {/block "contenido"} */
}
