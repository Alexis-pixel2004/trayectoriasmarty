<?php
/* Smarty version 5.6.0, created on 2025-11-29 20:04:29
  from 'file:exportarAlumnos.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692b51cd72c8c3_82294292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dc7c6e10953a1148455ec5d38bd4b6fa25ece97' => 
    array (
      0 => 'exportarAlumnos.tpl',
      1 => 1764446502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692b51cd72c8c3_82294292 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1942582392692b51cd5a5df8_49956321', "contenido");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_1942582392692b51cd5a5df8_49956321 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<div class="container mt-4">
  <h2 class="mb-4">📥 Exportar Alumnos por Grupo</h2>

  <div class="mb-3">
    <label for="grupoExportar">Selecciona un grupo:</label>
    <select id="grupoExportar" class="form-select">
      <option value="">-- Selecciona --</option>
      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('grupos'), 'g');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach0DoElse = false;
?>
        <option value="<?php echo $_smarty_tpl->getValue('g')['IdGrupo'];?>
"><?php echo $_smarty_tpl->getValue('g')['NombreGrupo'];?>
 - <?php echo $_smarty_tpl->getValue('g')['CicloEscolar'];?>
</option>
      <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </select>
  </div>

  <button id="btnExportarExcel" class="btn btn-success" disabled>
    📊 Generar Excel
  </button>
</div>
<?php
}
}
/* {/block "contenido"} */
}
