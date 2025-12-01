<?php
/* Smarty version 5.6.0, created on 2025-12-01 00:29:51
  from 'file:listarAlumnosPorGrupo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692ce17facd034_25645679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85fc00af9c8dd87c9d91fa1108b9aebab065dc74' => 
    array (
      0 => 'listarAlumnosPorGrupo.tpl',
      1 => 1764548972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692ce17facd034_25645679 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1277666553692ce17faba6e5_04651878', "contenido");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_1277666553692ce17faba6e5_04651878 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?>

<div class="container mt-4">
  <h2 class="mb-4">Alumnos por Grupo</h2>

  <!-- Selector de grupo con botón -->
  <div class="mb-3 d-flex align-items-center">
    <label for="grupoSeleccionado" class="me-2">Selecciona un grupo:</label>
    <select id="grupoSeleccionado" class="form-select me-2" name="grupoSeleccionado">
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
    <button id="btnCargarGrupo" class="btn btn-primary">Cargar</button>
  </div>

  <!-- Tabla de alumnos -->
  <table class="table table-striped table-hover table-bordered" id="tablaAlumnos">
    <thead class="table-dark">
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Sexo</th>
        <th>Fecha Nacimiento</th>
        <th>CURP</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Se llenará dinámicamente vía AJAX -->
    </tbody>
  </table>
</div>

<!-- Modal de edición de alumno -->
<div class="modal fade" id="modalEditarAlumno" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="formEditarAlumno">
        <div class="modal-header">
          <h5 class="modal-title">Editar Alumno</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="editIdAlumno">

          <div class="mb-3">
            <label for="editNombre">Nombre</label>
            <input type="text" id="editNombre" class="form-control">
            <small id="error-editNombre" class="text-danger d-none">Te falta ingresar el nombre.</small>
          </div>

          <div class="mb-3">
            <label for="editApellido">Apellido</label>
            <input type="text" id="editApellido" class="form-control">
            <small id="error-editApellido" class="text-danger d-none">Te falta ingresar el apellido.</small>
          </div>

          <div class="mb-3">
            <label for="editSexo">Sexo</label>
            <select id="editSexo" class="form-select">
              <option value="">Selecciona</option>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
            <small id="error-editSexo" class="text-danger d-none">Selecciona el sexo del alumno.</small>
          </div>

          <div class="mb-3">
            <label for="editFecha">Fecha Nacimiento</label>
            <input type="date" id="editFecha" class="form-control">
            <small id="error-editFecha" class="text-danger d-none">Debes ingresar la fecha de nacimiento.</small>
          </div>

          <div class="mb-3">
            <label for="editCURP">CURP</label>
            <input type="text" id="editCURP" class="form-control">
            <small id="error-editCURP" class="text-danger d-none">CURP inválido. Verifica el formato.</small>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar cambios</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
}
}
/* {/block "contenido"} */
}
