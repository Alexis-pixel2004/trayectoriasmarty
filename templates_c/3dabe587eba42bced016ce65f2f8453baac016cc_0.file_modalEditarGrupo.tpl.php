<?php
/* Smarty version 5.6.0, created on 2025-12-01 01:37:58
  from 'file:modalEditarGrupo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692cf1768b7410_94551568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dabe587eba42bced016ce65f2f8453baac016cc' => 
    array (
      0 => 'modalEditarGrupo.tpl',
      1 => 1764552771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692cf1768b7410_94551568 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\laragon\\www\\trayectoria_smarty\\templates';
?><div class="modal fade" id="modalEditarGrupo" tabindex="-1">
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


<?php }
}
