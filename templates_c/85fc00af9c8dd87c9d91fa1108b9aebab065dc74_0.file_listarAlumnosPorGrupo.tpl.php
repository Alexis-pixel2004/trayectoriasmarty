<?php
/* Smarty version 5.6.0, created on 2025-11-24 13:55:58
  from 'file:listarAlumnosPorGrupo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692463ee67d544_99412939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85fc00af9c8dd87c9d91fa1108b9aebab065dc74' => 
    array (
      0 => 'listarAlumnosPorGrupo.tpl',
      1 => 1763919734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692463ee67d544_99412939 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_916109753692463ee6639e9_32533079', "contenido");
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "contenido"} */
class Block_916109753692463ee6639e9_32533079 extends \Smarty\Runtime\Block
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
            <input type="text" id="editNombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="editApellido">Apellido</label>
            <input type="text" id="editApellido" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="editSexo">Sexo</label>
            <select id="editSexo" class="form-select" required>
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="editFecha">Fecha Nacimiento</label>
            <input type="date" id="editFecha" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="editCURP">CURP</label>
            <input type="text" id="editCURP" class="form-control" required>
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
