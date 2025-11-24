<?php
/* Smarty version 5.6.0, created on 2025-11-24 14:06:53
  from 'file:listarGrupos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_6924667db74b44_17020717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7758cf1ed2086c47ff30be47e194936c798bbd4' => 
    array (
      0 => 'listarGrupos.tpl',
      1 => 1763780048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modalEditarGrupo.tpl' => 1,
  ),
))) {
function content_6924667db74b44_17020717 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10547244756924667dad8f23_28494120', "contenido");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_10547244756924667dad8f23_28494120 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<h2>Mis grupos</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Nombre del Grupo</th>
      <th>Grado</th>
      <th>Nivel</th>
      <th>Ciclo Escolar</th>
      <th>Acciones</th> 
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('grupos'), 'g');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach0DoElse = false;
?>
      <tr>
        <td><?php echo $_smarty_tpl->getValue('g')['NombreGrupo'];?>
</td>
        <td><?php echo $_smarty_tpl->getValue('g')['NombreGrado'];?>
</td>
        <td><?php echo $_smarty_tpl->getValue('g')['Nivel'];?>
</td>
        <td><?php echo $_smarty_tpl->getValue('g')['CicloEscolar'];?>
</td>
        <td>
          <button class="btn btn-sm btn-primary editar-grupo" data-id="<?php echo $_smarty_tpl->getValue('g')['IdGrupo'];?>
">
            Editar
          </button>
          <button class="btn btn-sm btn-danger eliminar-grupo" data-id="<?php echo $_smarty_tpl->getValue('g')['IdGrupo'];?>
">
            Eliminar
          </button>
        </td>
      </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php $_smarty_tpl->renderSubTemplate("file:modalEditarGrupo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php
}
}
/* {/block "contenido"} */
}
