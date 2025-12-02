<?php
/* Smarty version 5.6.0, created on 2025-12-02 14:42:21
  from 'file:modalEditarGrupo.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.6.0',
  'unifunc' => 'content_692efacd7222e8_60369425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dabe587eba42bced016ce65f2f8453baac016cc' => 
    array (
      0 => 'modalEditarGrupo.tpl',
      1 => 1764686389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692efacd7222e8_60369425 (\Smarty\Template $_smarty_tpl) {
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

          <!-- Nombre del grupo -->
          <div class="mb-3">
            <label for="edit_NombreGrupo">Nombre del Grupo</label>
            <input type="text" id="edit_NombreGrupo" name="NombreGrupo" class="form-control">
            <small id="error-edit_NombreGrupo" class="text-danger d-none">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Te falta ingresar el nombre del grupo.
              </div>
            </small>
          </div>

          <!-- Grado con opciones dinámicas -->
          <div class="mb-3">
            <label for="edit_IdGrado">Grado</label>
            <select id="edit_IdGrado" name="IdGrado" class="form-select">
              <option value="">-- Selecciona un grado --</option>
              <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('grados'), 'g');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('g')->value) {
$foreach1DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('g')['IdGrado'];?>
">
                  <?php echo $_smarty_tpl->getValue('g')['NombreGrado'];?>
 - <?php echo $_smarty_tpl->getValue('g')['Nivel'];?>

                </option>
              <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </select>
            <small id="error-edit_IdGrado" class="text-danger d-none">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Debes seleccionar un grado válido.
              </div>
            </small>
          </div>

          <!-- Ciclo escolar -->
          <div class="mb-3">
            <label for="edit_CicloEscolar">Ciclo Escolar</label>
            <input type="text" id="edit_CicloEscolar" name="CicloEscolar" class="form-control" placeholder="2025-2026">
            <small id="error-edit_CicloEscolar" class="text-danger d-none">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                Formato inválido. Usa el formato 2025-2026.
              </div>
            </small>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar cambios</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </form>
  </div>
</div>



<?php }
}
