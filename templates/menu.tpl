{extends file="layout.tpl"}

{block name="contenido"}
<h2 class="text-center mb-4">Menú Principal</h2>

<div class="row g-4 justify-content-center">
    <!-- Inicio -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-house-door display-4 text-primary"></i>
                <h5 class="card-title mt-3">Registrar Grupo</h5>
                <a href="registrar_grupo.php" class="btn btn-outline-primary w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Alumnos -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-people display-4 text-info"></i>
                <h5 class="card-title mt-3">Alumnos</h5>
                <a href="alumnos.php" class="btn btn-outline-info w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Grupos -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-diagram-3 display-4 text-warning"></i>
                <h5 class="card-title mt-3">Grupos</h5>
                <a href="listar_grupos.php" class="btn btn-outline-warning w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Materias -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-book display-4 text-danger"></i>
                <h5 class="card-title mt-3">Materias</h5>
                <a href="materias.php" class="btn btn-outline-danger w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>

    <!-- Exportar -->
    <div class="col-md-4">
        <div class="card shadow-sm h-100 text-center">
            <div class="card-body">
                <i class="bi bi-star display-4 text-secondary"></i>
                <h5 class="card-title mt-3">Exportar</h5>
                <a href="exportarAlumnos.php" class="btn btn-outline-secondary w-100 mt-3">Entrar</a>
            </div>
        </div>
    </div>
</div>
{/block}
