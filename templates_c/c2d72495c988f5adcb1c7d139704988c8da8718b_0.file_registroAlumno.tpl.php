<?php
/* Smarty version 5.6.0, created on 2025-12-01 01:37:43
  from 'file:registroAlumno.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692cf16764c2e3_66355542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2d72495c988f5adcb1c7d139704988c8da8718b' => 
    array (
      0 => 'registroAlumno.tpl',
      1 => 1764552881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692cf16764c2e3_66355542 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1193907216692cf16763af37_84367870', "contenido");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_1193907216692cf16763af37_84367870 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<form id="form_registro_alumno">
  <div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="Nombre" id="Nombre" class="form-control">
    <small id="error-Nombre" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Te falta ingresar el nombre.</div></small>
  </div>

  <div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="Apellido" id="Apellido" class="form-control">
    <small id="error-Apellido" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Te falta ingresar el apellido.</div></small>
  </div>

  <div class="mb-3">
    <label>Sexo</label>
    <select name="Sexo" id="Sexo" class="form-select">
      <option value="">Selecciona</option>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
    </select>
    <small id="error-Sexo" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Selecciona el sexo del alumno.</div></small>
  </div>

  <div class="mb-3">
    <label>Fecha de Nacimiento</label>
    <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control">
    <small id="error-FechaNacimiento" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Debes ingresar la fecha de nacimiento.</div></small>
  </div>

  <div class="mb-3">
    <label>CURP</label>
    <input type="text" name="CURP" id="CURP" class="form-control">
    <small id="error-CURP" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">CURP inválido. Verifica el formato.</div></small>
  </div>

  <div class="mb-3">
    <label>Grupo</label>
    <select name="IdGrupo" id="IdGrupo" class="form-select">
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
    <small id="error-IdGrupo" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Debes seleccionar un grupo.</div></small>
  </div>

  <button type="submit" class="btn btn-success">Registrar Alumno</button>
</form>

<?php
}
}
/* {/block "contenido"} */
}
