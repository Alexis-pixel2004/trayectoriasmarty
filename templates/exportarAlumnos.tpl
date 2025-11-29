{extends file="layout.tpl"}

{block name="contenido"}
<div class="container mt-4">
  <h2 class="mb-4">Exportar Alumnos por Grupo</h2>

  <div class="mb-3">
    <label for="grupoExportar">Selecciona un grupo:</label>
    <select id="grupoExportar" class="form-select">
      <option value="">-- Selecciona --</option>
      {foreach from=$grupos item=g}
        <option value="{$g.IdGrupo}">{$g.NombreGrupo} - {$g.CicloEscolar}</option>
      {/foreach}
    </select>
  </div>

  <button id="btnExportarExcel" class="btn btn-success" disabled>
    Generar Excel
  </button>
</div>
{/block}