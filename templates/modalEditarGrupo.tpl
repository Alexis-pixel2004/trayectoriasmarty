<div class="modal fade" id="modalEditarGrupo" tabindex="-1">
  <div class="modal-dialog">
    <form id="form_editar_grupo">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editar Grupo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="edit_IdGrupo" name="IdGrupo">

          <div class="mb-3">
            <label>Nombre del Grupo</label>
            <input type="text" id="edit_NombreGrupo" name="NombreGrupo" class="form-control">
            <small id="error-edit_NombreGrupo" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Te falta ingresar el nombre del grupo.</div></small>
          </div>

          <div class="mb-3">
            <label>Grado</label>
            <input type="number" id="edit_IdGrado" name="IdGrado" class="form-control">
            <small id="error-edit_IdGrado" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Debes seleccionar un grado válido.</div></small>
          </div>

          <div class="mb-3">
            <label>Ciclo Escolar</label>
            <input type="text" id="edit_CicloEscolar" name="CicloEscolar" class="form-control" placeholder="2025-2026">
            <small id="error-edit_CicloEscolar" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Formato inválido. Usa el formato 2025-2026.</div></small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar cambios</button>
        </div>
      </div>
    </form>
  </div>
</div>


