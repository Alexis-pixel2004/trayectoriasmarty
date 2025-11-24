{extends file="layout.tpl"}

{block name="contenido"}
<div class="container mt-4">
  <h2 class="mb-4">Gestión de Alumnos</h2>

  <div class="list-group">
    <!-- Redirección al panel de registro -->
    <a href="registro_alumnos.php" class="list-group-item list-group-item-action">
      Registrar Alumno
    </a>

    <!-- Redirección al panel de visualización -->
    <a href="visualizar_alumnos.php" class="list-group-item list-group-item-action">
      Ver Alumnos por Grupo
    </a>
  </div>
</div>
{/block}