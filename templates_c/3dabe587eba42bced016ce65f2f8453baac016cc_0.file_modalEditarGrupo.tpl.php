<?php
/* Smarty version 5.6.0, created on 2025-11-24 14:06:53
  from 'file:modalEditarGrupo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_6924667dd52818_78489037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dabe587eba42bced016ce65f2f8453baac016cc' => 
    array (
      0 => 'modalEditarGrupo.tpl',
      1 => 1763780042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6924667dd52818_78489037 (\Smarty\Template $_smarty_tpl) {
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
          </div>
          <div class="mb-3">
            <label>Grado</label>
            <input type="number" id="edit_IdGrado" name="IdGrado" class="form-control">
          </div>
          <div class="mb-3">
            <label>Ciclo Escolar</label>
            <input type="text" id="edit_CicloEscolar" name="CicloEscolar" class="form-control">
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
