{extends file="layout.tpl"}

{block name="contenido"}
<form id="form_grupo" method="post" class="card p-3 mb-3 ">
  <div class="row g-2">
    <div class="col-md-4">
      <label class="form-label">Nombre del grupo</label>
      <input type="text" id="NombreGrupo" name="NombreGrupo" class="form-control">
      <small id="error-NombreGrupo" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Te falta ingresar el nombre del grupo.</div></small>
    </div>

    <div class="col-md-3">
      <label class="form-label">Grado</label>
      <select id="IdGrado" name="IdGrado" class="form-select">
        <option value="">Selecciona un grado</option>
        {foreach from=$grados item=g}
          <option value="{$g.IdGrado}">{$g.NombreGrado} - {$g.Nivel}</option>
        {/foreach}
      </select>
      <small id="error-IdGrado" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Debes seleccionar un grado válido.</div></small>
    </div>

    <div class="col-md-3">
      <label class="form-label">Ciclo escolar</label>
      <input type="text" id="CicloEscolar" name="CicloEscolar" class="form-control" placeholder="2025-2026">
      <small id="error-CicloEscolar" class="text-danger d-none"><div class="alert alert-success alert-dismissible fade show" role="alert">Formato inválido. Usa el formato 2025-2026.</div></small>
    </div>

    <div class="col-md-2 d-grid">
      <label class="form-label">&nbsp;</label>
      <button type="submit" class="btn btn-success">Agregar</button>
    </div>
  </div>
</form>


{/block}