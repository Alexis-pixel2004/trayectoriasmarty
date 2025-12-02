{extends file="layout.tpl"}

{block name="contenido"}
<h2>Mis grupos</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Nombre del Grupo</th>
      <th>Grado</th>
      <th>Nivel</th>
      <th>Ciclo Escolar</th>
      <th>Acciones</th> 
    </tr>
  </thead>
  <tbody>
    {foreach from=$grupos item=g}
      <tr>
        <td>{$g.NombreGrupo}</td>
        <td>{$g.NombreGrado}</td>
        <td>{$g.Nivel}</td>
        <td>{$g.CicloEscolar}</td>
        <td>
      <button class="btn btn-sm btn-primary editar-grupo" data-id="{$g.IdGrupo}">
          Editar
      </button>

          <button class="btn btn-sm btn-danger eliminar-grupo" data-id="{$g.IdGrupo}">
            Eliminar
          </button>
        </td>
      </tr>
    {/foreach}
  </tbody>
</table>
{include file="modalEditarGrupo.tpl"}

{/block}