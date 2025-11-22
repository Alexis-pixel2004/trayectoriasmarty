{extends file="layout.tpl"}

{block name="contenido"}
<h2>Registro de Docente</h2>

{if isset($mensaje)}
  <p>{$mensaje}</p>
{/if}

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg">
        <div class="card-header bg-success text-white text-center">
          <h4>Registro de Docente</h4>
        </div>
        <div class="card-body">
          <form name="registro_usuario" id="registro_usuario" method="POST" action="registro_docente.php"
                onsubmit="return validarCamposRegistroUsuario()">
            
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre"
                     onKeyPress="borrarValidacionregistro('nombre')">
            </div>

            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" class="form-control" name="apellido" id="apellido"
                     onKeyPress="borrarValidacionregistro('apellido')">
            </div>

            <div class="mb-3">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" class="form-control" name="usuario" id="usuario"
                     onKeyPress="borrarValidacionregistro('usuario')">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="password" id="password"
                     onKeyPress="borrarValidacionregistro('password')">
            </div>

            <div class="mb-3">
              <label for="especialidad" class="form-label">Especialidad</label>
              <input type="text" class="form-control" name="especialidad" id="especialidad"
                     onKeyPress="borrarValidacionregistro('especialidad')">
            </div>

            <div class="d-flex justify-content-between">
              <input class="btn btn-outline-primary" type="submit" value="Registrar">
              <a href="login.php" class="btn btn-outline-secondary">Volver al Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



{/block}