{extends file="layout.tpl"}

{block name="contenido"}
<div class="container mt-4">
  <h2 class="mb-4">Alumnos por Grupo</h2>

  <!-- Selector de grupo con botón -->
  <div class="mb-3 d-flex align-items-center">
    <label for="grupoSeleccionado" class="me-2">Selecciona un grupo:</label>
    <select id="grupoSeleccionado" class="form-select me-2" name="grupoSeleccionado">
      <option value="">-- Selecciona --</option>
      {foreach from=$grupos item=g}
        <option value="{$g.IdGrupo}">{$g.NombreGrupo} - {$g.CicloEscolar}</option>
      {/foreach}
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

{/block}
