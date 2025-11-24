{extends file="layout.tpl"}

{block name="contenido"}
<form id="form_registro_alumno">
  <div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="Nombre" id="Nombre" class="form-control">
  </div>
  <div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="Apellido" id="Apellido" class="form-control">
  </div>
  <div class="mb-3">
    <label>Sexo</label>
    <select name="Sexo" id="Sexo" class="form-select">
      <option value="">Selecciona</option>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Fecha de Nacimiento</label>
    <input type="date" name="FechaNacimiento" id="FechaNacimiento" class="form-control">
  </div>
  <div class="mb-3">
    <label>CURP</label>
    <input type="text" name="CURP" id="CURP" class="form-control">
  </div>
  <div class="mb-3">
    <label>Grupo</label>
    <select name="IdGrupo" id="IdGrupo" class="form-select">
      {foreach from=$grupos item=g}
        <option value="{$g.IdGrupo}">{$g.NombreGrupo} - {$g.CicloEscolar}</option>
      {/foreach}
    </select>
  </div>
  <button type="submit" class="btn btn-success">Registrar Alumno</button>
</form>
{/block}