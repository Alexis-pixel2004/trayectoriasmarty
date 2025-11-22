{extends file="layout.tpl"}

{block name="contenido"}
<div class="d-flex justify-content-center align-items-center" style="min-height:70vh;">
    <form method="post" action="../controladores/login.php" class="card p-4 shadow-sm" style="max-width:400px; width:100%;">

        <h4 class="mb-3 text-center">Iniciar Sesión</h4>

        {if isset($error)}
            <div class="alert alert-danger">{$error}</div>
        {/if}

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="usuario" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <a href="../controladores/registro_docente.php" class="btn btn-outline-secondary">Registrar nuevo docente</a>
        </div>
    </form>
</div>
{/block}
